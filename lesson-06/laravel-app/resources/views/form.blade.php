@extends('layouts.app')

@section('content')

    <div class="page-header">
        <h1>Prijavnica za PHP akademiju</h1>
    </div>

    <p>
        Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.
        Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.
    </p>
    <p>Više informacija na:
        <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
    </p>

    <br/>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/form') }}" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

        <div class="form-group">
            <label for="name">Ime i prezime</label>
            <input id="name" name="name" placeholder="Pero Perić" required class="form-control" />
        </div>

        <div class="form-group">
            <label for="email">E-mail adresa</label>
            <input id="email" name="email" type="email" placeholder="pero@etf.hr" required class="form-control" />
        </div>

        <div class="form-group">
            <label>Smjer</label>
            <input id="academy_major" name="academy_major" placeholder="Računarstvo" required class="form-control" />
        </div>

        <div class="form-group">
            <label>Godina studija</label><br />

            <?php foreach(range(1,5) as $year): ?>
            <label class="radio-inline" for="academy_year_<?php echo $year ?>">
                <input type="radio" name="academy_year" id="academy_year_<?php echo $year ?>" value="<?php echo $year ?>"/>
                <?php echo $year ?>
            </label>
            <?php endforeach ?>
        </div>

        <div class="form-group">
            <label for="motivation">Što te motiviralo da se prijaviš?</label>
            <textarea id="motivation" name="motivation" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="prior_knowledge">Imaš li predznanje vezano uz web development?</label>
            <textarea id="prior_knowledge" name="prior_knowledge" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label>U kojim jezicima si do sada programirao?</label><br />

            <?php foreach(array('C', 'C#', 'Javascript', 'Brainfuck') as $key => $language): ?>
            <label class="checkbox-inline" for="prior_language_<?php echo $key ?>">
                <input type="checkbox" name="prior_languages[]" id="prior_language_<?php echo $key ?>" value="<?php echo $language ?>"/>
                <?php echo $language ?>
            </label>
            <?php endforeach ?>
        </div>

        <div class="form-group">
            <label for="code_example">Uploadaj primjer svoga koda</label>
            <input type="file" id="code_example" name="code_example"/>
        </div>

        <br/>

        <button type="submit" class="btn btn-primary">Prijavi se!</button>

    </form>

@endsection
