<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <button @class(['active_btn' => app()->getLocale()=="en"])>en</button>
    <button @class(['active_btn' => app()->getLocale()=="ru"])>ru</button>
    <button @class(['active_btn' => app()->getLocale()=="ru2"])>ru2</button>
</div>
<form class="lang-form">
    <label for="fname">{{__('fname')}}</label>
    <input name="fname" type="text">
    <label for="lname">{{__('lname')}}</label>
    <input name="lname" type="text">
    <label for="desc">{{__('desc')}}</label>
    <input name="desc" type="text">
</form>
<style>
    .lang-form
    {
        display: grid;
        width: 300px;
    }
    .active_btn
    {
        background-color: gray;
    }
</style>
</body>
</html>
