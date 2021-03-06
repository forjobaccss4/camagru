<body style="background-color: black">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../../css/menu.css">
    <link rel="stylesheet" href="../../../css/authorization.css">
</head>
<div class="container">
    <canvas id="matrix"></canvas>
    <nav id="primary_nav_wrap" style="position:absolute; top: 0; left: 0px;">
        <ul style="list-style-type: none">
            <li>
                <a href="#" id="user" class="col s12"><?=$user?></a>
                <ul class="left" style="list-style-type: none">
                    <li><a href="/camagru">Галерея</a></li>
                    <li><a href="/authorization">Авторизация</a></li>
                    <li id="myCabinet"><a href="/camagru/cabinet">Личный кабинет</a></li>
                    <?=$logout?>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="forLoginPage" style="display: flex; position: absolute;">
    <form name="authorization_form" method="post" action="/authorization">
        <input checked="" id="signin" name="action" type="radio" value="signin" onclick="getNameOfField(this.id)">
        <label for="signin">Sign in</label>
        <input id="signup" name="action" type="radio" value="signup" onclick="getNameOfField(this.id)">
        <label for="signup">Sign up</label>
        <input id="reset" name="action" type="radio" value="reset" onclick="getNameOfField(this.id)">
        <label for="reset">Forgot</label>
        <div id="wrapper">
            <div id="arrow"></div>
            <input id="login" name="login" placeholder="Login" type="text">
            <input id="pass" name="pass" placeholder="Password" type="password">
            <input id="repass" name="repass" placeholder="Repeat password" type="password">
            <input id="yourname" name="yourname" placeholder="Name" type="text">
            <input id="Email" name="email" placeholder="Email" type="text">
        </div>
        <button type="submit" onclick="return validate_form()">
    <span>
        <br>
        Sign in
        <br>
        Sign up
        <br>
        Reset
    </span>
        </button>
    </form>
</div>
<div id="wrongRegister" class="wrongRegisterData">
    <button id="dontRemove" class="closeButton" onclick="closeWrongRegisterData()">&times</button>
</div>
</div>
<script src="../../../js/matrixBackground.js"></script>
<script src="../../../js/checkUser.js"></script>
</body>