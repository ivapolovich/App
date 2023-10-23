<?php

function getHtmlTable($students)
{
    $tableHtml = '<table border="1">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </tr>
    </thead>
    <tbody>';

    foreach ($students as $student) {
            $tableHtml .= '<tr>
                <td>' . $student['name'] . '</td>
                <td>' . $student['surname'] . '</td>
                <td>' . $student['age'] . '</td>
                <td>' . $student['email'] . '</td>
                <td>' . $student['phone'] . '</td>
            </tr>';
    }

    $tableHtml .= '</tbody></table>';

    return $tableHtml;
}


$studentJson = file_get_contents('vjezbepolaznici.json');

$students = json_decode($studentJson, true);

// nakon ovoga, ako zapišemo u obliku funkcije tablicu, možemo ju samo pozvati umjesto da pišemo cijelu tablicu: echo getHtmlTable($students);

?>

<table border="1">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $student['name']?></td>
                <td><?= $student['surname']?></td>
                <td><?= $student['age']?></td>
                <td><?= $student['email']?></td>
                <td><?= $student['phone']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

//dodavanje novog studenta

$students[] = [
    'name' => "Perolina",
    'surname' => "Pericic",
    'age' => 35,
    'email' => "pero.peric@algebra.hr",
    'phone' => "091 123 4567"
];

$studentJson = json_encode($students);

file_put_contents('vjezbepolaznici.json', $studentJson);

?>

<?php

$studentJson = file_get_contents('vjezbepolaznici.json');

$students = json_decode($studentJson, true);

// nakon ovoga, ako zapišemo u obliku funkcije tablicu, možemo ju samo pozvati umjesto da pišemo cijelu tablicu: echo getHtmlTable($students);

?>

<table border="1">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $student['name']?></td>
                <td><?= $student['surname']?></td>
                <td><?= $student['age']?></td>
                <td><?= $student['email']?></td>
                <td><?= $student['phone']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>