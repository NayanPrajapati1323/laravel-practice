<h1>Choose your language</h1>

<a href="setLang/en">English</a>
<br>
<a href="setLang/hi">Hindi</a>
<br>
<a href="setLang/guj">Gujarati</a>

<h1>
    {{ __('welcome.heading')}}
</h1>

This is about page: <a href="about">{{  __('welcome.about') }}</a>
<br>
This is home page: <a href="home">{{  __('welcome.home') }}</a>
<br>
This is contact page: <a href="contact">{{  __('welcome.contact') }}</a>



<h1>{{  __('welcome.greeting', ['name' => 'Nayan']) }}</h1>