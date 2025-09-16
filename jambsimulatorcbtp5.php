<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAMB Simulator</title>
    <script>
    document.addEventListener('DOMContentLoaded', ()=> {
    const form = document.getElementById("subjectform");
    const checkboxes = form.querySelectorAll('input[type="checkbox"]:not(:disabled)');
    const maxselectable = 3;
    function updatecheckbox(){
        const checkedcount =
        [...checkboxes].filter(cb => cb.checked).length;
        checkboxes.forEach(cb => {
            if (!cb.checked){
                cb.disabled = checkedcount >= maxselectable;
            }
        });
    };
    checkboxes.forEach(cb => {cb.addEventListener('change',updatecheckbox);
});
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const selected = ["English Language"];
    checkboxes.forEach(cb=>{
        if (cb.checked)
        selected.push(cb.value);
    });
    localStorage.setItem('subjcts1',
    JSCON.stringify(selected));
    window.location.href = "http://localhost/PHP%20FILES/jambinstructioncbtp6.php";
});
});
    </script>
    <style>
               body {font-family: Arial, sans-serif;margin: 20px;}
            .container {padding: 5px;border-radius: 2px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);max-width: 900px;margin: auto;}
            h2 {color: #a00;margin-bottom: 5px;}
            p {line-height: 1.6;margin-bottom: 15px;}
            .subject-selection {display: flex;flex-wrap: wrap;margin-top: 10px;}
            .subject-column {flex: 1;min-width: 250px;margin-right: 20px;}
            .subject-column label {display: block;margin-bottom: 10px;}
            .buttons {text-align: right;margin-top: 30px;}
            .buttons button {padding: 10px 20px;border: none;border-radius: 1px;cursor: pointer;font-size: 16px;margin-left: 10px;}
            .buttons .practice-mode {background-color: #a00;color: #fff;}
            .buttons .exam-mode {background-color: #a00;color: #fff;}
            a{padding: 11px 21px;background-color: #a00; text-decoration: none; color: #fff; width: 300px; text-align: center;}
    </style>
</head>
<body>
    <div class="container">
        <h2>Take an Exam - JAMB Simulator</h2>
        <p>Welcome to Myschool's Past Questions Examination Centre, where you will study past questions for your upcoming exam. To start studying past questions right now, please select the subjects to be examined on. English Language is compulsory, so you are allowed to select 3 other subjects of your choice below. After selection, click next to enter exam hall.</p>
<form action="" method="post" id="subjectform">
        <div class="subject-selection">
            <div class="subject-column">
                <label><input type="checkbox" value="English Language" checked disabled> English Language</label>
                <label><input type="checkbox" value="Chemistry"> Chemistry</label>
                <label><input type="checkbox" value="Biology"> Biology</label>
                <label><input type="checkbox" value="Literature-in-English"> Literature in English</label>
                <label><input type="checkbox" value="Commerce"> Commerce</label>
                <label><input type="checkbox" value="Government"> Government</label>
                <label><input type="checkbox" value="Agricultural Science"> Agricultural Science</label>
                <label><input type="checkbox" value="History"> History</label>
                <label><input type="checkbox" value="Fine Arts"> Fine Arts</label>
                <label><input type="checkbox" value="French"> French</label>
                <label><input type="checkbox" value="Insurance"> Insurance</label>
                <label><input type="checkbox" value="Further Mathematics"> Further Mathematics</label>
                <label><input type="checkbox" value="Igbo"> Igbo</label>
                <label><input type="checkbox" value="Home Economics"> Home Economics</label>
            </div>
            <div class="subject-column">
                <label><input type="checkbox" value="Mathematics"> Mathematics</label>
                <label><input type="checkbox" value="Physics"> Physics</label>
                <label><input type="checkbox" value="Geography"> Geography</label>
                <label><input type="checkbox" value="Economics"> Economics</label>
                <label><input type="checkbox" value="Accounts - Principles of Accounts"> Accounts - Principles of Accounts</label>
                <label><input type="checkbox" value="Christain Religious Knowledge (CRK)"> Christian Religious Knowledge (CRK)</label>
                <label><input type="checkbox" value="Islamic Religious Knowledge (IRK)"> Islamic Religious Knowledge (IRK)</label>
                <label><input type="checkbox" value="Sweet Sixteen"> Sweet Sixteen</label>
                <label><input type="checkbox" value="Music"> Music</label>
                <label><input type="checkbox" value="Animal Husbandry"> Animal Husbandry</label>
                <label><input type="checkbox" value="Civic Education"> Civic Education</label>
                <label><input type="checkbox" value="Yoruba"> Yoruba</label>
                <label><input type="checkbox" value="Arabic"> Arabic</label>
                <label><input type="checkbox" value="Hausa"> Hausa</label>
            </div>
        </div>
        <div class="buttons">
            <button class="practice-mode" type="submit">Practice Mode</button>
            <a href="http://localhost/PHP%20FILES/jambinstructioncbtp6.html">Exam Mode</a>
        </div>
</form>
</div>
</body>
</html>