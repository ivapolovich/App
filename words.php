<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST["word"];

    if (!empty($word)) {
        $data = file_exists('words.json') ? json_decode(file_get_contents('words.json'), true) : [];

        $data[] = $word;

        $json_data = json_encode($data);

        file_put_contents('words.json', $json_data);

        $letterCount = strlen($word);
        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $word);
        $consonantCount = $letterCount - $vowelCount;

    
    } else {
        header("Location: index.php?error=empty");
        exit();
    }
}


if (file_exists('words.json')) {
    $data = json_decode(file_get_contents('words.json'), true);
    if (!empty($data)) {
        echo "<table border='1'>";
        echo "<tr><th>Word</th><th>Letter Count</th><th>Vowel Count</th><th>Consonant Count</th></tr>";
        foreach ($data as $word) {
            $letterCount = strlen($word);
            $vowelCount = preg_match_all('/[aeiouAEIOU]/', $word);
            $consonantCount = $letterCount - $vowelCount;
            echo "<tr><td>$word</td><td>$letterCount</td><td>$vowelCount</td><td>$consonantCount</td></tr>";
        }
        echo "</table>";
    }
}

?>



