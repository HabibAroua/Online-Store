<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="javascript/Category.js"></script>
    </head>
    <body>
        <script>
            const c = new Category(1,'the name','the description');
            c.insert();
            c.action();
        </script>
</head>
<body>

<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>
        
    </body>
</html>