<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form checkbox</title>
    <style>
        html,
        body {
            font-family: sans-serif;
            line-height: 1.4;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 20px;
            margin-left: auto;
            margin-right: auto;
        }


        .form-check {
        --border: #d1d5db;
        --cursor: #89909e;
        --checked: #1771e6;
        --checked-cursor: #fff;
        position: relative;
        font-size: 16px;
        }

        .form-check input {
        position: absolute;
        opacity: 0;
        }

        .form-check label {
        display: grid;
        grid-template-columns: 2em 1fr;
        grid-template-areas: "checkbox label";
        gap: 0.7em;
        }

        .form-check label::before,
        .form-check label::after {
        grid-area: checkbox;
        content: "";
        display: block;
        margin-top: 0.1em;
        }

        .form-check label::before {
        width: 100%;
        height: 1em;
        border-radius: 1em;
        border: solid 1px var(--border);
        transition: background-color 0.3s, border-color 0.3s, box-shadow 0.3s;
        }

        .form-check label::after {
        position: relative;
        left: 2px;
        top: 2px;
        width: calc(1em - 2px);
        height: calc(1em - 2px);
        border-radius: 50%;
        background-color: var(--cursor);
        transition: background-color 0.3s, transform 0.3s;
        }

        .form-check input:checked + label::before {
        background-color: var(--checked);
        border-color: var(--checked);
        }

        .form-check input:checked + label::after {
        background-color: var(--checked-cursor);
        transform: translateX(1em);
        }

        .form-check input:focus + label::before {
        box-shadow: 0 0 0 0.25em #c4dbf9;
        border-color: var(--checked);
        }



    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form-check">
            <input type="checkbox" id="cgv" name="cgv">
            <label for="cgv">
                J'accepte les conditions générales de vente
            </label>
        </div>
    </div>
</body>

</html>