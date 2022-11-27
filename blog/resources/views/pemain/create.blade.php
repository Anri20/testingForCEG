<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action={{ route('pemain.index')}} method="POST">
        <label>Name</label>
        <input type="text" id="pemain-name" placeholder="Input nama pemain" name="pemain_name">
        <label>Gender</label>
        <input type="text" id="pemain-gender" placeholder="Input gender pemain" name="pemain_gender">
        <button type="submit">Submit</button>
    </form>
</body>
</html>