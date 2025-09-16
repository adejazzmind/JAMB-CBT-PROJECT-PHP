<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examination Instructions - Read All</title>
    <style>
        body {font-family: Arial, sans-serif;margin: 40px;color: #333;}
        h1 {color: #CC0000;font-size: 24px;margin-bottom: 30px;}
        h2 {color: #CC0000;font-size: 18px;margin-top: 25px;margin-bottom: 10px;}
        ul {list-style-type: none;padding: 0;margin-bottom: 20px;}
        ul li {margin-bottom: 5px;}
        .instructions-text {margin-bottom: 20px;line-height: 1.5;}
        .button-container {display: flex;justify-content: space-between;margin-top: 30px;}
        .button {background-color: #CC0000;color: white;padding: 10px 20px;border: none;cursor: pointer;font-size: 16px;text-decoration: none;text-align: center;}
    </style>
</head>
<body>
    <h1>Examination Instructions - Read All</h1>

    <p>You have selected the following subjects:</p>
    <ul id="subjectlist">
    </ul>

    <h2>Practice Mode</h2>
    <p>Total Number of Questions: 50</p>
    <p>Total Time Given: 35 minutes</p>

    <h2>CBT Instructions</h2>
    <p class="instructions-text">
        You will be given 20 questions in English Language and 10 questions on each of the other subjects (a total of 50 questions).
        The questions will be presented 1 each in series starting with English Language. Once you have answered a question you will be required to click on "Next" to move to the next question and click "Finish" when you are done with all questions.
        If at anytime, you can no longer continue, you can click on "Quit Exam" to see your performance analysis.
    </p>
    <p class="instructions-text">
        You will be given 35 minutes to answer all 50 questions and submit. If at any point, you're unable to finish on time, you will be automatically shown the summary of your performance.
    </p>
    <p class="instructions-text">
        Keep trying everytime, everyday and JAMB, WAEC, NECO and NABTEB exams will be a walk-over for you. To start now, click on the "Start Exam" button below.
    </p>
<span id="backspan">
    <div class="button-container">
        <a href="http://localhost/PHP%20FILES/jambsimulatorcbtp5.php" class="button">Back</a>
        <a href="http://localhost/PHP%20FILES/examsessioncbtp8.php" class="button">Start Exam</a>
    </span>
    </body>
    </div>
    <script>
        const selectedsubjects=
        JSON.parse(localStorage.getItem('subjcts1')) || [];
        const list = document.getElementById('subjectlist');
        selectedsubjects.forEach(subject=>{
            const li = document.createElement("li");
            li.textContent = subject;
            list.appendChild(li);
        });
    </script>
</body>
</html>