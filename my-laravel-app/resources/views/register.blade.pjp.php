<html>
    <head>
        <meta charset="utf-8">
    </head>>
    <body>
        <h1>ユーザ登録フォーム</h1>
        <form name="registerform" action="/auth/register" method="post">
            {{ csrf_field() }}
        </form>
    </body>
</html>>