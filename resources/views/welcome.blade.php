@extends('layout')

@section('cssfile')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('title')
    nuts of C++
@endsection

@section('content')

 <!--menu start-->
    <div class="menu">Menu</div>
    <div class="sidebar text-center">
        <ul>
            <li>Home</li>
            <li>Contact</li>
            <li>About</li>
        </ul>
    </div>
    <!-- menu end -->

    <!-- interface start -->
    <div class="interface">
        <img class="sz" src="img/1197375-amazing-background-pictures-for-computer-1920x1080-samsung-galaxy.jpg">
        <div class="centered">Learning C++ For Beginners</div>
        <div class="col-12 col-md-12 col-sm-12 col-12 text-center centered2">
            <a href="login.html" target="_blank" class="mybtn" data-toggle="modal" data-target=".loginmodal">Log in</a>
            <a href="#" class="mybtn" data-toggle="modal" data-target=".signupmodal">Sign up</a>
            <a href="/blog" target="_blank" class="mybtn">our Blog</a>
        </div>
    </div>
    <!-- interface end -->

    <!-- st login Modal -->
    <div class="modal fade loginmodal" role="dialog">
        <div class="modal-dialog login">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="loginheader col-centerit">Please login to access our blog</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <div>

                                <div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                            <div>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row col-centerit">
                                            <div>
                                                <div class="form-check col-centerit">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div>
                                                <div class="col-6 offset-4">
                                                    <button type="submit" class="mybtn">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                                <br />
                                                <a class="nv col-centerit text-center" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- en login Modal -->
    
    <!-- st singup Modal -->
    <div class="modal fade signupmodal" role="dialog">
        <div class="modal-dialog signup">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="signupheader col-centerit">join our C++ community</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-6 offset-4">
                                <button type="submit" class="mybtn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- en signup Modal -->
    
    <div class="container-fluid">
    
        <!-- btn list start-->
        <div class="col-12 text-center">

            <button type="button" class="btn btn-light">intro</button>
            <button type="button" class="btn btn-light">output</button>
            <button type="button" class="btn btn-light">input</button>
            <button type="button" class="btn btn-light">conditions</button>
            <button type="button" class="btn btn-light">loops</button>
            <button type="button" class="btn btn-light">functions</button>
            <button type="button" class="btn btn-light">arrays and data structure</button>

        </div>
        <!-- btn list end -->
    
        <!-- centered 10 col content start -->
        <div class="col-10 offset-1">
            <!-- intro start -->
            <div id="intro">
                <div class="jumbotron">
                    <div class="row">
                        <span class="circle">what's C++?<br></span>
                        <p>
                            c++ is an intermediate-level programming language which is known by it's fast performance and
                            it is also extension of the C language (another programming language) it can be written in two
                            ways "C style" or "object-oriented style." we will discus the oop style in detail
                        </p>
                        <span class="circle">what we need to start?<br></span>
                        <p>
                            before you start writting your code you need to use IDE stands for (Integrated development environment)
                            so watch this video
                            <a href="https://www.youtube.com/watch?v=3B4hPHZNtNw" target="_blank">install code blocks</a> it will show you how to download and install codeblocks and which compiler to be used
                        </p>
                        <span class="circle">Compiler <br></span>
                        A compiler is a special program that processes statements written in a particular programming language and turns them into machine language or "code" that a computer's processor uses
                    </div>

                </div>
            </div>
            <!-- intro end -->
    
            <!-- output start -->
            
            <div id="output">
                <div class="jumbotron code">

                    <pre>  <code>
// please copy and paste this code to your IDE codeblocks or any and run it
 <span class="gr">#</span><span class="gr">include</span> <span class="re">&lt;</span><span class="gr">iostream</span><span class="re">&gt;</span>

<span class="bl">using</span> <span class="bl">namespace</span> <span class="gr">std</span>;

<span class="bl">int</span> main()
<span class="re">{</span>
 <span class="gr">cout</span><span class="re">&lt;</span><span class="re">&lt;</span>"Hello world"<span class="re">&lt;</span><span class="re">&lt;</span><span class="gr">endl</span>;
 <span class="bl">return</span> 0;
<span class="re">}</span>

</code>
</pre>
                </div>
                <div class="jumbotron">
                    <div class="row">
                        <p>
                            <span class="circle">what is the meaning of output ?</span>
                            output is basically showing some thing on the console which is black screen
                            you can say it is a basic programm to show you the result of your code
                            take this code and copy it and paste it in your compiler and then run it

                        </p>
                    </div>
                    <div class="row">
                        <p><span class="circle">#include</span> stands for including new library in our case
                            the iostream library so we can use all it's functions and variables in our code
                            we can use the cout because we included it
                        </p>
                    </div>

                    <div class="row">
                        <p><span class="circle">iostream</span> is a library which contains all the standard inputs and outputs objects</p>
                    </div>
                    <div class="row">
                        <p><span class="circle">using namespace std</span> prevent us from
                            writing std before every statment for example in our code if we hadn't put
                            <span class="bl">using namespace std;</span> we would have written <span class="sil">std::cout&lt;&lt;</span>

                        </p>
                    </div>
                    <div class="row">
                        <p><span class="circle">; (simicolon)</span> it is c++ syntax after every
                            statement we should end it with <span class="sil">;</span> that is how c++ know that we ended our statement
                        </p>
                    </div>
                    <div class="row">
                        <p><span class="circle">int main()</span> main is the main function and <span class="bl">int</span> is a data type
                            you will understand better when you learn about inputs and functions
                        </p>
                    </div>
                    <div class="row">
                        <p><span class="circle">cout&lt;&lt;</span>
                            output object allows us to output any thing <span class="sil">cout&lt;&lt;"hello";</span>
                            for outputting string<span class="sil"> cout&lt;&lt;5;</span> for outputting integer number 5
                            <span class="sil">cout&lt;&lt;0.5;</span> for outputting floating number so you just put the number after
                            cout&lt;&lt; and it will be displyed in the console
                        </p>
                    </div>
                    <div class="row">
                        <p><span class="circle">endl</span>
                            it means output new line and <span class="bl">"\n"</span> also means output new line
                        </p>
                    </div>
                </div>
            </div>
            <!-- output end -->
            <!-- input start -->
            <div id="input">
                <div class="code jumbotron">
                    <div class="row">
                        <pre><code>
// please copy and paste this code to your IDE codeblocks or any and run it
<span class="gr">#</span><span class="gr">include</span> <span class="re">&lt;</span><span class="gr">iostream</span><span class="re">&gt;</span>
<span class="bl">using</span> <span class="bl">namespace</span> <span class="gr">std</span>;
<span class="bl">int</span> main()
<span class="re">{</span>
 <span class="bl">int</span> i;
 <span class="bl">long</span> <span class="bl">long</span> ll;
 <span class="bl">float</span> f;
 <span class="bl"><span class="bl">do</span>uble</span> d;
 <span class="bl">char</span> c;
 <span class="gr">string</span> s;
 <span class="gr">cin</span><span class="re">&gt;</span><span class="re">&gt;</span>i<span class="re">&gt;</span><span class="re">&gt;</span>ll<span class="re">&gt;</span><span class="re">&gt;</span>f<span class="re">&gt;</span><span class="re">&gt;</span>d<span class="re">&gt;</span><span class="re">&gt;</span>c<span class="re">&gt;</span><span class="re">&gt;</span>s;
 <span class="gr">cout</span><span class="re">&lt;</span><span class="re">&lt;</span>i<span class="re">&lt;</span><span class="re">&lt;</span>" "<span class="re">&lt;</span><span class="re">&lt;</span>ll<span class="re">&lt;</span><span class="re">&lt;</span>" "<span class="re">&lt;</span><span class="re">&lt;</span>f<span class="re">&lt;</span><span class="re">&lt;</span>" "<span class="re">&lt;</span><span class="re">&lt;</span>d<span class="re">&lt;</span><span class="re">&lt;</span>" "<span class="re">&lt;</span><span class="re">&lt;</span>c<span class="re">&lt;</span><span class="re">&lt;</span>" "<span class="re">&lt;</span><span class="re">&lt;</span>s<span class="re">&lt;</span><span class="re">&lt;</span><span class="gr">endl</span>;
 <span class="bl">return</span> 0;
<span class="re">}</span>
</code>
</pre>
                    </div>
                </div>
                <div class="jumbotron">
                    <div class="row">
                        <p><span class="circle">what is input ?</span>
                            the input of the porgramm is what you give the computer what
                            value you give it string integer long integer so that the computer can output it
                            take this code copy and paste it in your brower and click run then write those values in the console like
                            the image
                            <img class="codeim" src="Capture.PNG">
                        </p>

                    </div>
                    <div class="row">
                        <p><span class="circle">what is datatypes ?</span>
                            before you enter (describe) any variable you should give it a data tybe you are basically telling the
                            computer i am going to enter an integer <span class="bl">int</span> iam going to enter a long intger
                            <span class="bl">long long</span> iam going to enter a precision <span class="bl">float</span> i am going
                            to enter a precision value for higher number <span class="bl">double</span> iam going to enter one character <span class="bl">char</span> iam going to enter multiple characters <span class="bl">string</span> after you describe it you can give it any name but it should begin with _ or with alphabet <span class="bl">int X; int x; int _x; int x2; int x_;</span> for example
                            <br>
                            <span class="circle">cin&gt;&gt;</span>
                            cin stands for taking the input basically when i say <span class="bl">cin&gt;&gt;x;</span> i am telling the
                            computer please read this value which is an integer and it is name is x
                            <br>
                            <span class="circle">datatypes ranges?</span>
                            what are int and long? long is an integer but with higher range
                            integer can stand values from almost -2^32 to 2^32 and long long can stand values almost from -2^64 to 2^64 and if you but more values in your datatypes which it cannot stand the programm will over flow and out put uncorrect values here is a list of some ranges and data types <span class="gr">note : signed means positive only unsigned means positive and negative </span>
                        </p>
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    <th scope="col">type</th>
                                    <th scope="col">how many bytes it takes in memory</th>
                                    <th scope="col">range</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>int</td>
                                    <td>4 bytes</td>
                                    <td> $-2^7+1$ to $2^7-1$ or $0$ to $2^8-1$</td>
                                </tr>
                                <tr>
                                    <td>float</td>
                                    <td>4 bytes</td>
                                    <td>+/- 3.4e +/- 38 (~7 digits)</td>
                                </tr>
                                <tr>
                                    <td>double</td>
                                    <td>8 bytes</td>
                                    <td>+/- 1.7e +/- 308 (~15 digits)</td>
                                </tr>
                                <tr>
                                    <td>long long</td>
                                    <td>8 bytes</td>
                                    <td>$-2^63$ to $2^63-1$</td>
                                </tr>
                                <tr>
                                    <td>long double</td>
                                    <td>8bytes</td>
                                    <td>+/- 1.7e +/- 308 (~15 digits)</td>
                                </tr>
                                <tr>
                                    <td>unsigned long int</td>
                                    <td>4 bytes</td>
                                    <td>$-2^31+1$ to $2^31-1$</td>

                                </tr>
                                <tr>
                                    <td>signed long int</td>
                                    <td>4 bytes</td>
                                    <td>0 to $2^32-1$</td>
                                </tr>

                                <tr>
                                    <td>wchar_t</td>
                                    <td>2 or 4 bytes</td>
                                    <td>1 wide character</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- input end -->
    
            <!-- conditions start-->
            <div id="conditions">
                <div class="jumbotron code">
                    <pre>
           <code>
// please copy and paste this code to your IDE codeblocks or any and run it

#include &lt;iostream>
using namespace std;

int main()
{
 int x,y;
 cin>>x>>y;
 if (5>6){cout&lt;&lt;"YES"&lt;&lt;endl;}
 else if (5+2>7){cout&lt;&lt;"YES"&lt;&lt;endl;}
 else if (5*2>8){cout&lt;&lt;"YES"&lt;&lt;endl;}
 else if (6/6>1){cout&lt;&lt;"YES"&lt;&lt;endl;}
 else {cout&lt;&lt;"here";}
 return 0;
}

           </code>
           </pre>
                </div>
                <div class="jumbotron">
                    <div class="row">
                        <p>
                            <span class="circle">if</span>
                            the if statement means if this condition is true do what ever in the curly braces<span class="re">{}</span> then donot go and look up after it just stop if you find a true condtion<br />
                            <span class="circle">else if </span> the else if should come after if condition it means if the condition in the pervious if wasn't true check up this one if it's true do what ever in the curly braces then stop
                            <br />
                            <span class="circle">else</span>
                            else should come after if condition else means if you didnot find any correct if statement if there is no previous true condition do what ever
                            in the curly braces
                        </p>
                    </div>
                </div>
            </div>
            <!-- conditions end-->
        
            <!-- loops start -->
            <div id="loops">
                <div class="jumbotron code">
                    <pre>
           <code>
// please copy and paste this code to your IDE (codeblocks or any) and run it
#include &lt;iostream>
using namespace std;
int main()
{
    int n;
    cin>>n;
    for (int i=0;i&lt;n;i++)
    {
        cout&lt;&lt;i&lt;&lt;" ";
    }
    cout&lt;&lt;endl;
    int i;
    i=0;
    while(i&lt;n)
    {
        cout&lt;&lt;i&lt;&lt;" ";
        i++;
    }
    cout&lt;&lt;endl;
    i=0;
    do{

        cout&lt;&lt;i&lt;&lt;" ";
        i++;
    }
    while(i&lt;n);
    cout&lt;&lt;endl;

    for (int i=0;i&lt;n;i++)
    {
        for (int j=0;j&lt;n;j++)
        {
            cout&lt;&lt;i&lt;&lt;","&lt;&lt;j&lt;&lt;" ";
        }
        cout&lt;&lt;endl;
    }
    return 0;
}

           </code>
           </pre>

                </div>

                <div class="jumbotron">
                    <p><span class="circle">for loop</span>
                        what is the loop ? the loop is a peice of a code that repeats it self while the condition you gave holds
                        true so look at this example you will find the for loop is basicaly three components
                        for(int i=0 ; i&lt;n ;i++) first you give a start to your loop by declaring a variable and giving a value to the variable i
                        <span class="bl">int i=0</span> of course you can name it any thing
                        second the condition
                        this loop will still continue as long as this condition is true <span class="bl">i&lt;n</span> the third one is an action we give after
                        checking if the condition is true so we do <span class="bl">i++</span> we add one on our variable ++ means +1 that's why it's called c++
                        we should be aware that if our action is not right the loop will never stop so if i said for (int i=0;0&lt;i++)
                        this loop will never stop now to the body <span class="re">{ "what ever inside those carley braces is the body" }
                        </span> so if i want to do some thing inside the loop like summing elements from 1 to n i will do this int sum=0;
                        for (int i=1;i&lt;=n;i++){sum+=i;} cout&lt;&lt;sum&lt;&lt;endl; so we now knew that our loop will go n steps
                        the body can be any thing try it your self
                    </p>
                    <br />
                    <p>
                        <span class="circle">while</span>
                        so while loop takes only the condition <span class="bl">while</span>(<span class="re">"condition"</span>)
                        {<span class="re">
                            "do what ever in the body"
                        </span>}
                    </p>
                    <p> <span class="circle">do while</span>the do while loop do the codition at least one time and then
                        check if the codition true continue the looping <span class="bl">do</span><span class="re">{"what ever in the body "}</span><span class="bl">while</span>(<span class="re">"condition"</span>);
                    </p>
                    <table class="table table-hover col-12">
                        <thead>
                            <tr>
                                <th scope="col">parts</th>
                                <th scope="col">for loop</th>
                                <th scope="col">while</th>
                                <th scope="col">do while</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>variable declarition</td>
                                <td>codition</td>
                                <td>do "cosider it as the body"</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>codition</td>
                                <td>body</td>
                                <td>while</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>action i++ or i--</td>

                            </tr>
                        </tbody>
                    </table>
                    <p><span class="circle">nested loops</span>
                        please after you run your programm try to put different values like 4 and 5 and else
                        and see the output in the loops and the nested loop so as you see in the nested loop <span class="bl">
                            for loop inside for loop
                        </span>
                        you will notice that i doesnot move and j moves till the end then i moves one step and stops till j moves to the
                        end and if you see the output you will notice that it is similar to the output of the 2d plane (0,0) (0,1) (0,2) etc..
                        so cosider if i having 3 loops iam dealing with 3d plane (grid) 2 nested loops 2d plane 4 4d plane etc..
                    </p>
                </div>
            </div>
            <!-- loops end -->
        </div>
        <!-- centered 10 col content end -->
        
        <!-- functions start-->
        <div id="functions">

            <div class="col-10 offset-1 jumbotron code">
                <pre>
            <code>
        #include &lt;iostream>
        using namespace std;

        long long noparameters()
        {
            return 5;
        }
        int parmeters(int n,int v,int s)
        {
            n*=v;
            n*=s;
            return n;
        }
        void doesnot_return_any_thing()
        {
        
            cout&lt;&lt;5&lt;&lt;endl;
            return ;
        }
        int main()
        {
           cout&lt;&lt;noparameters()&lt;&lt;endl;
           cout&lt;&lt;parmeters(3,2,1)&lt;&lt;endl;
           doesnot_return_any_thing();
               return 0;
        }
    
                
            </code>
            </pre>
            </div>
            <div class="jumbotron col-10 offset-1">
                <p>
                    <span class="circle">
                        functions :-
                    </span>
                    <br>
                    there are two type of functions <span class="re">1- void function </span>it returns nothing .<br>
                    and another type of functions which
                    take a <span class="re">2- data type </span> and returns (variable or else ) of the same data type.
                    <br>
                    the function should has a name and can be given any number of parameters
                    a function is more and better way to organizing your code and make it readable and maintainable
                    the return of the function should be the same as the data type and can be any thing not only a variable you
                    can return array (list of variables) or datastructure a good use also of functions is recursion we will talk
                    alot about that in the next section
                </p>
            </div>
        </div>
        <!-- functions end-->

        
        <!-- array and datastructure start 12 col centered-->
        <div id="as_and_ds">
            <div class="row cc">

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>Array</h1>
                            <p>Array is an list of elements suppose we want to create 100 variable it is not
                                effecient to create them one by one that is when arrays comes for rescue it allows as to do that easily
                                please hover over the card to flip it and see the array syntax
                                <img class="rsimg col-3" src="img/Arrays-C.jpg">
                                <img class="rsimg col-3" src="img/two-d.png">
                            </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>Array syntax</h1>
                            <ul>
                                <li>
                                    <span class="scircle">intializing array:<br /> </span>1-int arr[5]={1,2,3,4,5};
                                    <br />2-for(int i=0;i&lt;arrsize;i++){cin>>arr[i];}
                                </li>
                                <li>
                                    <span class="scircle">accessing array elements (indexing):<br /></span>arr[index] where index the number of that element
                                    starting from zero

                                </li>
                                <li><span class="scircle">dimensions: <br /></span> you can intialize 1D array or 2D or 3D array ..etc as long as the multiplcation of its dimensions doesnot exceed certain amount of memory almost 10000000 1D array->arr[size],2D array -> arr[size][size2], 3D array -> arr[size][size2][size3] .... etc
                                </li>
                                <li>

                                    <span class="scircle">traversing the array:<br /></span> you can traverse the array easily using for loops number of neseted = number of dimensions

                                </li>
                            </ul>



                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>map</h1>

                            <p>map is a data structure with a key and value takes unique key (no duplicates) and any value related
                                to that key and it is a sorted data structure every key in it is sorted from smallest to the biggest
                                please hover over the card to see map syntax
                                <img class="rsimg col-3" src="img/ITCuties-Java-HashMap.png">
                                <img class="rsimg col-3" src="img/map-example.png">

                            </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>map syntax</h1>
                            <span class="scircle">initialization:<br /></span>
                            map&lt;data type of key,datat type of value> name of the map
                            for example map&lt;int,>map
                            int n; cin>>n; for (int i=0;i&lt;n;i++){int x,y;cin>>x>>y;map[x]=y;}
                            <br />
                            <span class="scircle">accessing map elements:<br /></span>
                            cout&lt;&lt;map[key];<br />
                            <span class="scircle">traverse the map using iterator:</span>
                            <br />
                            for(map&lt;int,string>::iterator it;= my_map.begin(); it != my_map.end(); ++it )
                            {
                            int key = it->first;
                            string value = it->second;
                            }
                            <br />
                            <span class="scircle">some map functions:</span>
                            <br />
                            map.erase(key); erases a key in the map<br />
                            map.count(key); chek if the key in the map<br />

                        </div>
                    </div>
                </div>

            </div>
            <div class="row cc">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>stack</h1>
                            <p>stack is a data structure when you put any elment in it (push)it goes on top of the stack
                                and when you delete (pop) any elment you delete also the top so you can only access the top element
                            <img class="rsimg col-3" src="img/defd4ad.png">
                            <img class="rsimg col-3" src="img/stack2c.jpg">
                        
                            </p>
                        </div>
                        <div class="flip-card-back">
                            <h1>stack syntax</h1>
                            <span class="scircle">stack initialization:</span><br />
                            stack&lt;int>m;
                            <br />
                            <span class="scircle">accessing stack elments:</span><br />
                            cout&lt;&lt;stack.top();
                            <br />
                            <span class="scircle">traversing the stack</span>
                            <br />
                            while(stack.size()>0)
                            <br />
                            {
                            <br />
                            cout&lt;&lt;stack.top()&lt;&lt;" ";
                            <br />
                            stack.pop();
                            //stack.pop() erases the top element
                            <br />

                            }
                            <br />

                        </div>
                    </div>
                </div>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>queue</h1>
                            <p>queue a data structure it is as you heared a queue so when you push or put element
                                it goes to the back of the queue but when you delete element it means that he finished his role
                                in the queue
                            <img class="rsimg col-4" src="img/Queue.png" alt="queue photo">

                            </p>
                        
                        </div>
                        <div class="flip-card-back">

                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- array and datastructure  end  12 col centered-->
    </div>
@endsection

@section('jsfile')
<script src="js/index.js"></script>
@endsection
   


    
