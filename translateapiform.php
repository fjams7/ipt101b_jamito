<html>
    <title>Translator API</title>
<head>
    <h1> Translator API <hr> </h1>
</head>
<style>
        hr {
        border: none;
        height: 1.5px;
        color: #333;
        background-color: #333;
        }
        html {font-family:"century gothic";display: flex; justify-content: center; 
            align-items: center; height: 200vh;}
        body {text-align:left; background-color: #bdffc8;}
        input {
            width: 400px;
            padding: 50px 50px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: px;
            font-size: 20px;
            text-align:left
        }
        input[type=submit] {
            width: 100px;
            height: 25px;
            padding: 0.01px 3px;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: 6px; 
            font-size: 20px;
            background-color: #FFFFFF;
            text-align:center;
        }
        label {
            display: inline-block;
            text-align: center;
        }
        select {
            box-sizing: border-box;
            height: 25px;
            width: 100px;
            display: inline-block;
            text-align: left;
            border: 1px solid gray;
            border-radius: 6px; 
        }
        h1 {font-size: 30px;}
        textarea {
            border-radius: 10px;
            font-size: 15px;
            height: 10%;
            width: 89%;
        }
        text {
            font-size: 20px;
        }
</style>
    <body>
        <form action="translateapi.php" method="POST">
            <label for="text"><b>Enter text<br></b></label> <br>
            <br><textarea rows="10" cols="80" name="text"></textarea>
            <p><br><br>Select Language: <tab>
            <label for="opt1" required> </label>
            <select id="opt1" name="opt1">
                <option value="en"> English </option>
                <option value="tl"> Tagalog </option>
                <option value="ceb"> Cebuano </option>
                <option value="zh-CN"> Chinese </option>
                <option value="fr"> French </option>
                <option value="ja"> Japanese </option>
                <option value="es"> Spanish </option>
            </select>
            &nbsp&nbsp&nbsp
            <tab> Translate to: <tab>
            <label for="opt2" required> </label>
            <select id="opt2" name="opt2">
                <option value="en"> English </option>
                <option value="tl"> Tagalog </option>
                <option value="ceb"> Cebuano </option>
                <option value="zh-CN"> Chinese </option>
                <option value="fr"> French </option>
                <option value="ja"> Japanese </option>
                <option value="es"> Spanish </option>
            </select>
            <tab>&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" value="Submit">
        </form>
        </p>
    </body>
</html>