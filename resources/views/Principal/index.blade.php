@extends('welcome')
@section('title')
    POS by JD
@endsection
@section('content')

    <script src="https://use.fontawesome.com/158577a63c.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic">
    <header role="banner">
        <h1>Admin Panel</h1>
        <ul class="utilities">
            <li class="users"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> My Account</a></li>
            <li class="logout warn"><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
        </ul>
    </header>

    <nav role='navigation'>
        <ul class="main">
            <li class="inve"><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> Inventario</a></li>
            <li class="write"><a href="#">Write Post</a></li>
            <li class="edit"><a href="#">Edit Posts</a></li>
            <li class="comments"><a href="#">Comments</a></li>
            <li class="users"><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Manage Users</a></li>
        </ul>
    </nav>

    <main role="main">
        <section class="panel important">
            <h2>Welcome to Your Dashboard </h2>
            <ul>
                <li>Important panel that will always be really wide Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ul>
        </section>
        <section class="panel">
            <h2>Posts</h2>
            <ul>
                <li><b>2458 </b>Published Posts</li>
                <li><b>18</b> Drafts.</li>
                <li>Most popular post: <b>This is a post title</b>.</li>
            </ul>
        </section>
        <section class="panel">
            <h2>Chart</h2>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ul>
        </section>
        <section class="panel important">
            <h2>Write a post</h2>
            <form action="#">
                <div class="twothirds">
                    <label for="name">Text Input:</label>
                    <input type="text" name="name" id="name" placeholder="John Smith" />

                    <label for="textarea">Textarea:</label>
                    <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>

                </div>
                <div class="onethird">
                    <legend>Radio Button Choice</legend>

                    <label for="radio-choice-1">
                        <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" /> Choice 1
                    </label>

                    <label for="radio-choice-2">
                        <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" /> Choice 2
                    </label>


                    <label for="select-choice">Select Dropdown Choice:</label>
                    <select name="select-choice" id="select-choice">
                        <option value="Choice 1">Choice 1</option>
                        <option value="Choice 2">Choice 2</option>
                        <option value="Choice 3">Choice 3</option>
                    </select>


                    <div>
                        <label for="checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" /> Checkbox
                        </label>
                    </div>

                    <div>
                        <input type="submit" value="Submit" />
                    </div>
                </div>
            </form>
        </section>
        <section class="panel">
            <h2>feedback</h2>
            <div class="feedback">This is neutral feedback Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, praesentium. Libero perspiciatis quis aliquid iste quam dignissimos, accusamus temporibus ullam voluptatum, tempora pariatur, similique molestias blanditiis at sunt earum neque.</div>
            <div class="feedback error">This is warning feedback
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                    <li>Vestibulum auctor dapibus neque.</li>
                </ul>  </div>
            <div class="feedback success">This is positive feedback</div>

        </section>
        <section class="panel ">
            <h2>Table</h2>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Posts</th>
                    <th>comments</th>
                    <th>date</th>
                </tr>
                <tr>
                    <td>Pete</td>
                    <td>4</td>
                    <td>7</td>
                    <td>Oct 10, 2015</td>

                </tr>
                <tr>
                    <td>Mary</td>
                    <td>5769</td>
                    <td>2517</td>
                    <td>Jan 1, 2014</td>
                </tr>
            </table>
        </section>

    </main>
    <footer role="contentinfo">Easy Admin Style by Melissa Cabral</footer>

@endsection