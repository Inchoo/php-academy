<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class FormController
{
    /**
     * Registration page with form
     */
    public function index()
    {
        $view = new View();
        $view->render('form', []);
    }

    /**
     * Form submit
     */
    public function submit()
    {
        //get $_POST data, validate data
        $data = $this->_validate($_POST);

        if($data === false) {
            header('Location: ' . App::config('url').'form/index');
        }

        //$data['prior_languages'] is array so we convert it to string before writing to file
        $data['prior_languages'] = implode(',', $data['prior_languages']);

        /* write to file example
        $file = fopen(BP . 'private/attendees.csv', 'a');
        fputcsv($file, $data);
        fclose($file);
        */

        // write to database
        $connection = App::connect();

        $sql = 'INSERT INTO `attendee`
                (`name`, `email`, `academy_major`, `academy_year`, `motivation`, `prior_knowledge`, `prior_languages`)
                VALUES (:name, :email, :academy_major, :academy_year, :motivation, :prior_knowledge, :prior_languages)';

        $stmt = $connection->prepare($sql);
        $stmt->execute($data);

        //@todo: upload submited file to /private folder, relate file with attendee

        // redirect to thank you page
        header('Location: ' . App::config('url').'form/thankyou');
    }

    /**
     * @param $data
     * @return array|bool
     */
    private function _validate($data)
    {
        $required = ['name', 'email', 'academy_major', 'academy_year', 'motivation'];
        $other = ['prior_knowledge', 'prior_languages'];
        $all = array_merge($required, $other);

        // remove unknown keys from data if any
        $data = array_diff_key($data, $all);

        //validate required keys
        foreach($required as $key) {
            if(!isset($data[$key])) {
                return false;
            }

            // trim (strip whitespaces from values) then check if empty
            $data[$key] = trim((string)$data[$key]);
            if(empty($data[$key])) {
                return false;
            }
        }

        // check if email is valid
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if(!in_array($data['academy_year'], ['1', '2', '3', '4', '5'])) {
            return false;
        }

        //@todo validate prior_languages by checking possible values

        return $data;
    }

    /**
     * Thank you page
     */
    public function thankyou()
    {
        $view = new View();
        $view->render('thankyou');

        // log new entry

        // create a log channel
        $log = new Logger('default');
        $log->pushHandler(new StreamHandler(BP . 'private/default.log', Logger::INFO));

        // add record to the log
        $log->info('Thank you page, entry was created');
    }

}