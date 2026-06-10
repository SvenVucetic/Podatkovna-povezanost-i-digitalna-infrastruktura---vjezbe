<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Biblija</title>
</head>
<style>

    .content{
        max-width:800px;
        vertical-align:middle;
        margin:auto;
        align-content:middle;
        background-color:#EEE3CD;
        height:600px;
        padding:1%;
        border-radius:20px;
    }
    .naslov{
        display:grid;
        grid-template-columns: auto auto;
        width:20%;
        vertical-align:middle;
        margin:auto;
        padding:1%;
    }
    img{
        max-width:60%;
        height:auto;
    }
    header{
        width:100%;
        background-color:#502111;
        margin:0;
    }
    header h1{
        color:white;
        font-family:verdana;
    }
    header img{
       
    }
    form{
        margin:0%;
    }
    body{
        margin:auto;
        background-image:url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn2.vectorstock.com%2Fi%2F1000x1000%2F94%2F06%2Fseamless-pattern-with-handwritten-text-lorem-ipsum-vector-33969406.jpg&f=1&nofb=1&ipt=f4dd6de453732216afacb5916f033a6edd6fe5bb92f75fe8c2bfda0ee5b8ce3e");
        background-attachment: fixed;
        background-size:auto 120%;
        background-position:center;
        
        overflow:hidden;
    }
    b{
        font-family:helvetica;
    }
    p{
        font-family:cambria;
        font-size:20px;
        border: 1px solid black;
        border-radius:8px;
        padding: 5px;
    }
    .ch{
        border:none;
        margin-left:5%;
        font-size:20px;
        font-family:helvetica;
        border-radius:5px;
        padding-right:5%;
        padding-right:2%;
        padding-top:2%;
        padding-bottom:2%;
    }
    .vs{
        border:none;
        font-size:20px;
        font-family:helvetica;
        border-radius:5px;
        padding-right:5%;
        padding-right:2%;
        padding-top:2%;
        padding-bottom:2%;
    }
    .dropbtn{
        border:none;
        padding:40%;
        font-size:20px;
        background-color:#f9f9f9;
        color:grey;
        border-radius:5px;
        font-family:helvetica;
    }
    .search{
        border:none;
        padding:2%;
        font-size:20px;
        background-color:black;
        color:white;
        border-radius:5px;
        font-family:helvetica;
        margin-left:5%;
    }
    .search:hover{
        background-color:darkgrey;
    }
    .random{
        border:none;
        padding:2%;
        font-size:20px;
        background-color:black;
        color:white;
        border-radius:5px;
        font-family:helvetica;
        float:right;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        left: 180%;
        top: 0%;
        z-index: 1;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    .nested-dropdown {
        position: relative;
        font-family:helvetica;
    }
    .nested-dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        left: 100%;
        top: 0;
        z-index: 1;
        overflow:hidden;
        overflow-y:scroll;
        max-height:1000%;
    }
    .nested-dropdown:hover
        .nested-dropdown-content {
        display: block;
        font-family:helvetica;
    }

    @media(max-width:1000px){
        .naslov{
            width:100%;
        }
        img{
            max-width:30%;
        }
        .ch{
            margin-left:7%;
        }
        .search{
            margin-left:0%;
        }
    }
    

</style>
<header>
    <div class="naslov">
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpngimg.com%2Fuploads%2Fbible%2Fbible_PNG4.png&f=1&nofb=1&ipt=305becaa2b033e8aa97d166366ce4dfd2a7b1fd39a9999d2271914421aeba069">
    <h1>e-Bible</h1>
</div>
</header>
<body>

<div class="content">
    <form action="" method="post">
    <div class="dropdown">
            <button class="dropbtn">
                Book
            </button>
            <div class="dropdown-content">
                <div class="nested-dropdown">
                    <a href="">Old Testament</a>
                    <div class="nested-dropdown-content">

                        <input type="radio" name="book" value="genesis">Genesis</input><br>
                        <input type="radio" name="book" value="exodus">Exodus</input><br>
                        <input type="radio" name="book" value="leviticus">Leviticus</input><br>
                        <input type="radio" name="book" value="numbers">Numbers</input><br>
                        <input type="radio" name="book" value="deuteronomy">Deuteronomy</input><br>
                        <input type="radio" name="book" value="joshua">Joshua</input><br>
                        <input type="radio" name="book" value="judges">Judges</input><br>
                        <input type="radio" name="book" value="ruth">Ruth</input><br>
                        <input type="radio" name="book" value="1samuel">1 Samuel</input><br>
                        <input type="radio" name="book" value="2samuel">2 Samuel</input><br>
                        <input type="radio" name="book" value="1kings">1 Kings</input><br>
                        <input type="radio" name="book" value="2kings">2 Kings</input><br>
                        <input type="radio" name="book" value="1chronicles">1 Chronicles</input><br>
                        <input type="radio" name="book" value="2chronicles">2 Chronicles</input><br>
                        <input type="radio" name="book" value="ezra">Ezra</input><br>
                        <input type="radio" name="book" value="nehemiah">Nehemiah</input><br>
                        <input type="radio" name="book" value="esther">Esther</input><br>
                        <input type="radio" name="book" value="job">Job</input><br>
                        <input type="radio" name="book" value="psalms">Psalms</input><br>
                        <input type="radio" name="book" value="proverbs">Proverbs</input><br>
                        <input type="radio" name="book" value="ecclesiastes">Ecclesiastes</input><br>
                        <input type="radio" name="book" value="songofsolomon">Song of Songs</input><br>
                        <input type="radio" name="book" value="isaiah">Isaiah</input><br>
                        <input type="radio" name="book" value="jeremiah">Jeremiah</input><br>
                        <input type="radio" name="book" value="lamentations">Lamentations</input><br>
                        <input type="radio" name="book" value="ezekiel">Ezekiel</input><br>
                        <input type="radio" name="book" value="daniel">Daniel</input><br>
                        <input type="radio" name="book" value="hosea">Hosea</input><br>
                        <input type="radio" name="book" value="joel">Joel</input><br>
                        <input type="radio" name="book" value="amos">Amos</input><br>
                        <input type="radio" name="book" value="obadiah">Obadiah</input><br>
                        <input type="radio" name="book" value="jonah">Jonah</input><br>
                        <input type="radio" name="book" value="micah">Micah</input><br>
                        <input type="radio" name="book" value="nahum">Nahum</input><br>
                        <input type="radio" name="book" value="habakkuk">Habakkuk</input><br>
                        <input type="radio" name="book" value="zephaniah">Zephaniah</input><br>
                        <input type="radio" name="book" value="haggai">Haggai</input><br>
                        <input type="radio" name="book" value="zechariah">Zechariah</input><br>
                        <input type="radio" name="book" value="malachi">Malachi</input><br>
                    </div>
                </div>
                <div class="nested-dropdown">
                    <a href="#">New Testament</a>
                    <div class="nested-dropdown-content">
                        <input type="radio" name="book" value="matthew">Matthew</input><br>
                        <input type="radio" name="book" value="mark">Mark</input><br>
                        <input type="radio" name="book" value="luke">Luke</input><br>
                        <input type="radio" name="book" value="john">John</input><br>
                        <input type="radio" name="book" value="acts">Acts</input><br>
                        <input type="radio" name="book" value="romans">Romans</input><br>
                        <input type="radio" name="book" value="1corinthians">1 Corinthians</input><br>
                        <input type="radio" name="book" value="2corinthians">2 Corinthians</input><br>
                        <input type="radio" name="book" value="galatians">Galatians</input><br>
                        <input type="radio" name="book" value="ephesians">Ephesians</input><br>
                        <input type="radio" name="book" value="philippians">Philippians</input><br>
                        <input type="radio" name="book" value="colossians">Colossians</input><br>
                        <input type="radio" name="book" value="1thessalonians">1 Thessalonians</input><br>
                        <input type="radio" name="book" value="2thessalonians">2 Thessalonians</input><br>
                        <input type="radio" name="book" value="1timothy">1 Timothy</input><br>
                        <input type="radio" name="book" value="2timothy">2 Timothy</input><br>
                        <input type="radio" name="book" value="titus">Titus</input><br>
                        <input type="radio" name="book" value="philemon">Philemon</input><br>
                        <input type="radio" name="book" value="hebrews">Hebrews</input><br>
                        <input type="radio" name="book" value="james">James</input><br>
                        <input type="radio" name="book" value="1peter">1 Peter</input><br>
                        <input type="radio" name="book" value="2peter">2 Peter</input><br>
                        <input type="radio" name="book" value="1john">1 John</input><br>
                        <input type="radio" name="book" value="2john">2 John</input><br>
                        <input type="radio" name="book" value="3john">3 John</input><br>
                        <input type="radio" name="book" value="jude">Jude</input><br>
                        <input type="radio" name="book" value="revelation">Revelation</input><br>
                    </div>
                </div>
            </div>
        </div>
        <input type="number" name="chapter" placeholder="Chapter" min="1" max="150" class="ch">
        <input type="number" name="verse" placeholder="Verse" min="1" max="176" class="vs">
        <button type="submit" name="submit" class="search">Search</button>
        <button type="submit" name="random" class="random">Random Verse</button>
</form>


<?php

if(isset($_POST['submit'])){


    error_reporting(E_ERROR | E_PARSE);
    $book=$_POST['book'];
    $chapter=$_POST['chapter'];
    $verse=$_POST['verse'];
    $response = file_get_contents("https://cdn.jsdelivr.net/gh/wldeh/bible-api/bibles/en-asv/books/$book/chapters/$chapter/verses/$verse.json");
    if($response){
        $data = json_decode($response, true);
        echo "<p><b>$book $chapter:$verse  </b>";
        echo $data['text'];
        echo "</p>";
    }
    else {
        echo "<p>That verse doesn't exist!</p>";
    }
    
}

if(isset($_POST['random'])){
    error_reporting(E_ERROR | E_PARSE);
    $books = array("1chronicles","1corinthians","1john","1kings","1peter","1samuel","1thessalonians","1timothy","2chronicles","2corinthians","2john","2kings","2peter","2samuel","2thessalonians","2timothy","3john","acts","amos","colossians","daniel","deuteronomy","ecclesiastes","ephesians","esther","exodus","ezekiel","ezra","galatians","genesis","habakkuk","haggai","hebrews","hosea","isaiah","james","jeremiah","job","joel","john","jonah","joshua","judges","lamentations","leviticus","luke","malachi","mark","matthew","micah","nahum","nehemiah","numbers","obadiah","philemon","philippians","proverbs","psalms","revelation","romans","ruth","songofsolomon","titus","zechariah","zephaniah");
    $book=array_rand($books,1);
    do{
        $chapter=rand(1,150);
        $verse=1;
        $response = file_get_contents("https://cdn.jsdelivr.net/gh/wldeh/bible-api/bibles/en-asv/books/$books[$book]/chapters/$chapter/verses/$verse.json");
    }while($response==false);
    do{
        $verse=rand(1,176);
        $response = file_get_contents("https://cdn.jsdelivr.net/gh/wldeh/bible-api/bibles/en-asv/books/$books[$book]/chapters/$chapter/verses/$verse.json");
    }while($response==false);
    $data = json_decode($response, true);
    echo "<p><b>$books[$book] $chapter:$verse  </b>";
    echo $data['text'];
    echo "</p>";
}
?>
</div>
</body>
</html>