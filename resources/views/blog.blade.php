@extends('master')
@section('content')
    <hr class="offset-lg">

    <div class="container tags">
        <p>Search by tags</p>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default btn-xs active">
            <input type="radio" name="options" id="option1" checked> All items
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option2"> Newest
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option3"> Popular
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option4"> News
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option5"> Articles
          </label>
          <label class="btn btn-default btn-xs">
            <input type="radio" name="options" id="option6"> Reviews
          </label>
        </div>
    </div>
    <hr class="offset-sm">

    <div class="blog">
      <div class="container">
        <div class="row">

          <div class="col-sm-6 col-md-6 item">

            <div class="body">
              <a href="../blog/item-photo.html" class="view"><i class="ion-ios-book-outline"></i></a>

              <a href="../blog/item-photo.html">
                <img src="../assets/img/blog/img1.jpg" title="Apple Devices" alt="Apple Devices">
              </a>

              <div class="caption">
                <h1 class="h3">The next generation of Multi-Touch</h1>
                <label> 07.01.2017</label>
                <hr class="offset-sm">

                <p>
                  The original iPhone introduced the world to Multi-Touch, forever changing the way people experience technology. With 3D Touch, you can do things that were never possible before. It senses how deeply you press the display, letting you do all kinds of essential things more quickly and simply. And it gives you real-time feedback in the form of subtle taps from the all-new Taptic Engine.
                </p>
                <hr class="offset-sm">

                <a href="../blog/item-photo.html"> View article <i class="ion-ios-arrow-right"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 item">
            <div class="body">
              <a href="../blog/item-video.html" class="view"><i class="ion-ios-book-outline"></i></a>
              <a href="../blog/item-video.html">
                <img src="../assets/img/blog/img2.jpg" title="Coffee" alt="Coffee">
              </a>

              <div class="caption">
                <h1 class="h3">MacBook Pro - brand new day for business.</h1>
                <label> 02.01.2017</label>
                <hr class="offset-sm">

                <p>
                  Organizations everywhere are realizing the potential that Mac brings to their employees by giving them the freedom to use the tools they already know and love. Software and hardware made for each other. Because Apple designs both the software and hardware, every Mac delivers the best possible experience for employees.
                </p>
                <hr class="offset-sm">

                <a href="../blog/item-video.html"> View article <i class="ion-ios-arrow-right"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 item">
            <div class="body">
              <a href="#" class="view"><i class="ion-ios-book-outline"></i></a>
              <a href="#">
                <img src="../assets/img/blog/img4.jpg" title="HP Chromebook" alt="HP Chromebook">
              </a>

              <div class="caption">
                <h1 class="h3">HP Chromebook review.</h1>
                <label> 02.01.2017</label>
                <hr class="offset-sm">

                <p>
                  HP’s Chromebook 11 G4 ($199) has a dull-gray shell that screams, “bulk education purchase” more than “buy me.” Precisely because this school-oriented model can bang around in backpacks, however, it could teach its consumer Chromebook cousins a thing or two about build quality.
                </p>
                <hr class="offset-sm">

                <a href="#"> View article <i class="ion-ios-arrow-right"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 item">
            <div class="body">
              <a href="#" class="view"><i class="ion-ios-book-outline"></i></a>
              <a href="#">
                <img src="../assets/img/blog/img3.jpg" alt="Apple Music" title="Apple Music"/>
              </a>

              <div class="caption">
                <h1 class="h3">Apple Music changes, Apple and SUP and more</h1>
                <label> 02.01.2017</label>
                <hr class="offset-sm">

                <p>
                  Sunday is Mother’s Day. Wait, did you forget? Well, thanks to Apple, you can make a “Shot on iPhone” Mother’s Day video, using this site.  Upload an image, enter your name, and then you can post the final result so Mom can enjoy.
                </p>
                <hr class="offset-sm">

                <a href="#"> View article <i class="ion-ios-arrow-right"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 item">
            <div class="body">
              <a href="#" class="view"><i class="ion-ios-book-outline"></i></a>
              <a href="#">
                <img src="../assets/img/blog/img2.jpg" title="Coffee" alt="Coffee">
              </a>

              <div class="caption">
                <h1 class="h3">MacBook Pro - brand new day for business.</h1>
                <label> 02.01.2017</label>
                <hr class="offset-sm">

                <p>
                  Organizations everywhere are realizing the potential that Mac brings to their employees by giving them the freedom to use the tools they already know and love. Software and hardware made for each other. Because Apple designs both the software and hardware, every Mac delivers the best possible experience for employees.
                </p>
                <hr class="offset-sm">

                <a href="#"> View article <i class="ion-ios-arrow-right"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 item">
            <div class="body">
              <a href="#" class="view"><i class="ion-ios-book-outline"></i></a>
              <a href="#">
                <img src="../assets/img/blog/img1.jpg" title="Apple Devices" alt="Apple Devices">
              </a>

              <div class="caption">
                <h1 class="h3">The next generation of Multi-Touch</h1>
                <label> 07.01.2017</label>
                <hr class="offset-sm">

                <p>
                  The original iPhone introduced the world to Multi-Touch, forever changing the way people experience technology. With 3D Touch, you can do things that were never possible before. It senses how deeply you press the display, letting you do all kinds of essential things more quickly and simply. And it gives you real-time feedback in the form of subtle taps from the all-new Taptic Engine.
                </p>
                <hr class="offset-sm">

                <a href="#"> View article <i class="ion-ios-arrow-right"></i> </a>
              </div>
            </div>
          </div>

        </div>

        <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
              </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="disabled"><a href="#">..</a></li>
            <li><a href="#">10</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
              </a>
            </li>
          </ul>
        </nav>

      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-lg">
@endsection