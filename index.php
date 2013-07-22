<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Mooi | A Beautifully Clean and Simple SCSS Framework</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/lukehoward.me.uk/35410.css" type="text/css" />
<link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/www.lukehoward.me.uk/35410.css" type="text/css" />
<link href="stylesheets/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Page Header -->

<header class="row">
	<div class="sixteen columns mooi-header">
    <img class="logo" src="images/mooi_logo_sml.png" width="168" height="60" alt="Mooi">
	<nav class="mooi-menu-right add-top-space">
    	<ul>
        	<li><a href="http://www.lukehoward.me.uk/mooi/">Home</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/documentation">Documentation</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/license">License</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/contact">Contact</a></li>
		</ul>
	</nav>        	          
    </div>
</header>    

<div class="row">
	<div class="sixteen columns">
    	<p class="big-intro">A Beautifully Clean and Simple SCSS Framework</p>
	</div>        
</div>

<div class="row  section">
	<div class="sixteen columns">
    	<p class="intro">Mooi is a SCSS Framework designed to speed up development times, with Mooi you can wireframe a site in a matter of minutes by setting a few variables and then adding your own CSS to the StyleSheets.</p>
        <p class="intro">Mooi has been designed, developed and created with users in mind, the concept is that nothing should be overly complicated and that by using this framework it will reduce the lines of code that you have to write, and let Mooi do the rest for you.</p>
    </div>
</div>
   

<div class="row  section">
	<div class="sixteen columns">
    	<h3>The Layout</h3>
		<p>The Layout is based on Skeleton, but uses a fluid design with break points to ensure a responsive design, so that no matter what device views a site using Mooi, it looks great each and every time.</p>
    </div>
    
    <div class="sixteen columns">
    
        <p class="code">
			&lt;div class="row"&gt;<br/>
            &lt;div class="sixteen columns"&gt;<br/>
            &lt;p&gt;This is an example element&lt;/p&gt;<br/>
            &lt;/div&gt;<br/>
            &lt;/div&gt;
        
        </p>
    </div>
    
  <div class="one columns example-col">One</div>
  <div class="fifteen columns example-col">Fifteen</div>
    
  <div class="two columns example-col">Two</div>
  <div class="fourteen columns example-col">Fourteen</div>
    
    <div class="three columns example-col">Three</div>
    <div class="thirteen columns example-col">Thirteen</div>
    
    <div class="four columns example-col">Four</div>
    <div class="twelve columns example-col">Twelve</div>
    
    <div class="five columns example-col">Five</div>
    <div class="eleven columns example-col">Eleven</div>
    
    <div class="six columns example-col">Six</div>
    <div class="ten columns example-col">Ten</div>
    
    <div class="seven columns example-col">Seven</div>
    <div class="nine columns example-col">Nine</div>
    
    <div class="eight columns example-col">Eight</div>
    <div class="eight columns example-col">Eight</div>
    
    <div class="nine columns example-col">Nine</div>
    <div class="seven columns example-col">Seven</div>
    
    <div class="ten columns example-col">Ten</div>
    <div class="six columns example-col">Six</div>
    
    <div class="eleven columns example-col">Eleven</div>
    <div class="five columns example-col">Five</div>
    
    <div class="twelve columns example-col">Twelve</div>
    <div class="four columns example-col">Four</div>
    
    <div class="thirteen columns example-col">Thirteen</div>
    <div class="three columns example-col">Three</div>
    
    <div class="fourteen columns example-col">Fourteen</div>
    <div class="two columns example-col">Two</div>
    
    <div class="fifteen columns example-col">Fifteen</div>
    <div class="one columns example-col">One</div>
    
  <div class="sixteen columns example-col">Sixteen</div>
    
    <div class="one-third column example-col">One Third</div>
    <div class="one-third column example-col">One Third</div>
    <div class="one-third column example-col">One Third</div>
    
    <div class="two-thirds column example-col">Two Thirds</div>
    <div class="one-third column example-col">One Third</div>
</div>
   
<div class="row  section">
	<div class="sixteen columns">
    
    <h2>The Buttons</h2>
    	
        <h5>Default Button</h5>
        
        <p>To use the Mooi style buttons by adding <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <a href="#" class="mooi-button">Default Button</a>
        <button class="mooi-button"/>Default Button</button>
       
        
        <p class="code">
        &lt;a href="#" class="mooi-button"&gt;Default Button&lt;/a&gt;<br/>
        &lt;button class="mooi-button"/&gt;Default Button&lt;/button&gt;
        </p>
        
        <h5>Disabled Button</h5>
        
        <p>To disable a button add <code>mooi-button-disabled</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <a href="#" class="mooi-button mooi-button-disabled">Disabled Button</a>
        <button class="mooi-button mooi-button-disabled"/>Disabled Button</button>
        
        <p class="code">
        &lt;a href="#" class="mooi-button mooi-button-disabled"&gt;Disabled Button&lt;/a&gt;<br/>
        &lt;button class="mooi-button mooi-button-disabled"/&gt;Disabled Button&lt;/button&gt;
        </p>
        
        <h5>Primary Button</h5>
        
        <p>To use the primary button add <code>mooi-button-primary</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <a href="#" class="mooi-button mooi-button-primary">Primary Button</a>
        <button class="mooi-button mooi-button-primary"/>Primary Button</button>
        
        <p class="code">
        &lt;a href="#" class="mooi-button mooi-button-primary"&gt;Primary Button&lt;/a&gt;<br/>
        &lt;button class="mooi-button mooi-button-primary"/&gt;Primary Button&lt;/button&gt;
        </p>
        
		<h5>Coloured Button</h5>
        
        <p>To use on of the coloured buttons add <code>mooi-button-red</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <button class="mooi-button mooi-button-green"/>Green Button</button>
        <button class="mooi-button mooi-button-red"/>Red Button</button>
        <button class="mooi-button mooi-button-orange"/>Orange Button</button>
        <button class="mooi-button mooi-button-blue"/>Blue Button</button>
        
        <p class="code">
        &lt;button class="mooi-button mooi-button-green"/&gt;Green Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-red"/&gt;Red Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-orange"/&gt;Orange Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-blue"/&gt;Blue Button&lt;/button&gt;
        </p>
        
        <h5>Different Sized Buttons</h5>
        
        <p>To change the size of the buttons add <code>mooi-button-small</code> after the <code>mooi-button</code> class to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
        
        <button class="mooi-button mooi-button-xsmall"/>X-Small Button</button>
        <button class="mooi-button mooi-button-small"/>Small Button</button>
        <button class="mooi-button"/>Regular Button</button>
        <button class="mooi-button mooi-button-large"/>Large Button</button>
        <button class="mooi-button mooi-button-xlarge"/>X-Large Button</button>
        
		<p class="code">
        &lt;button class="mooi-button mooi-button-xsmall"/&gt;X-Small Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-small"/&gt;Small Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button"/&gt;Regular Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-large"/&gt;Large Button&lt;/button&gt;<br/>
        &lt;button class="mooi-button mooi-button-xlarge"/&gt;X-Large Button&lt;/button&gt;
        </p>
        
    </div>
</div>    




<footer class="row">
    <div class="one-third column">
    	<p>&copy; Copyright 2013. Luke Howard. All Rights Reserved.</p>
    </div>
    <div class="one-third column">
    
    </div>
    <div class="one-third column">
    
    </div>
</footer>

</body>
</html>