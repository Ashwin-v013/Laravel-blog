
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="header">
    <h2>Blog </h2>
  </div>
  
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>TITLE HEADING</h2>
        <div >
        <img src="{{ asset('images/banner.png') }}" alt="">    
        </div>
        <p>Some text..</p>
      </div>
      <div class="card">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div >
            <img src="{{ asset('images/cafeteria.png') }}" alt="">
        </div>
        <p>Some text..</p>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2>About Me</h2>
        <div class="fakeimg" style="height:100px;">Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      </div>
      <div class="card">
        <h3>Popular Post</h3>
        <div class="fakeimg">Image</div><br>
        <div class="fakeimg">Image</div><br>
        <div class="fakeimg">Image</div>
      </div>
      <div class="card">
        <h3>Follow Me</h3>
        <p>Some text..</p>
      </div>
    </div>
  </div>
  
  <div class="footer">
    <h2>Footer</h2>
  </div>
</body>
</html>
