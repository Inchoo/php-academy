@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Prijave</h1>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Ime i prezime</th>
            <th>Email</th>
            <th>Smjer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($prijave as $prijava): ?>
        <tr>
            <th><?php echo htmlspecialchars($prijava['name']) ?></th>
            <th><?php echo htmlspecialchars($prijava['email']) ?></th>
            <th><?php echo htmlspecialchars($prijava['academy_major']) ?></th>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
@endsection
