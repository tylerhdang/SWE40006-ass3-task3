<?php
$pageTitle = "History of 'Hello World'";
$sections = [
    [
        "title" => "Origins",
        "content" => "The 'Hello World' program has its roots in the early 1970s. It was first introduced by Brian Kernighan in 1972 in his tutorial on the B programming language. However, it gained widespread popularity with the release of the book 'The C Programming Language' by Brian Kernighan and Dennis Ritchie in 1978."
    ],
    [
        "title" => "Purpose",
        "content" => "'Hello World' serves multiple purposes. It's often the first program written by beginners to learn a new programming language. It also acts as a sanity check to ensure that a language's compiler, development environment, and runtime are correctly installed and functioning."
    ],
    [
        "title" => "Variations",
        "content" => "While 'Hello World' is the most common phrase, variations exist across different programming cultures and languages. Some use 'Hello, World!' (with comma and exclamation mark), while others use localized versions in different languages. For example, 'Bonjour, monde!' in French or '你好，世界！' in Chinese."
    ],
    [
        "title" => "Cultural Impact",
        "content" => "The phrase has become deeply ingrained in programming culture. It's often used metaphorically to mean the first step in learning something new. Many programming books and tutorials start with a 'Hello World' example, making it a rite of passage for new programmers."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        h2 {
            color: #34495e;
        }
    </style>
</head>
<body>
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    
    <?php foreach ($sections as $section): ?>
        <h2><?php echo htmlspecialchars($section['title']); ?></h2>
        <p><?php echo htmlspecialchars($section['content']); ?></p>
    <?php endforeach; ?>

    <footer>
        <p>© <?php echo date("Y"); ?> Hello World History. All rights reserved.</p>
    </footer>
</body>
</html>