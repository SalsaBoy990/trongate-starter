<?php //json($data); ?>

<section class="banner top">
    <h1> Section Banner </h1>
    <h2> This is a description of this section </h2>
    <button class="search js">
        <b class="icon-search">Search Articles</b>
        <div class="shortcut">
            <kbd>Ctrl</kbd>
            <kbd>K</kbd>
        </div>
    </button>
</section>


<hr>
<h2>W3.CSS Colors</h2>
<p>The <a href="<?= $colors ?>"><strong>w3-color</strong></a>
    classes are inspired by modern colors used in marketing, road signs, and sticky notes:</p>
<div class="w3-row">

    <div class="w3-quarter">
        <div class="w3-container w3-purple w3-center w3-padding-16"><p>&nbsp;</p></div>
        <div class="w3-container w3-green w3-center w3-padding-16"><p>&nbsp;</p></div>
    </div>
    <div class="w3-quarter">
        <div class="w3-container w3-pink w3-center w3-padding-16"><p>&nbsp;</p></div>
        <div class="w3-container w3-teal w3-center w3-padding-16"><p>&nbsp;</p></div>
    </div>
    <div class="w3-quarter w3-hide-small">
        <div class="w3-container w3-orange w3-text-white w3-center w3-padding-16"><p>&nbsp;</p></div>
        <div class="w3-container w3-cyan w3-text-white w3-center w3-padding-16"><p>&nbsp;</p></div>
    </div>
    <div class="w3-quarter w3-hide-small">
        <div class="w3-container w3-yellow w3-center w3-padding-16"><p>&nbsp;</p></div>
        <div class="w3-container w3-lime w3-center w3-padding-16"><p>&nbsp;</p></div>
    </div>
</div>

<hr>
<h2>W3.CSS Containers</h2>
<p>The <strong><a href="<?= $containers ?>">w3-container</a></strong> class is the most important of the W3.CSS
    classes. It provides equality like:</p>
<ul>
    <li>Common margins</li>
    <li>Common paddings</li>
    <li>Common vertical alignments</li>
    <li>Common horizontal alignments</li>
    <li>Common fonts</li>
    <li>Common colors</li>
</ul>

<p>The w3-container class is typically used with HTML container elements, like:</p>
<p>&lt;div&gt;, &lt;header&gt;, &lt;footer&gt;, &lt;article&gt;, &lt;section&gt;, &lt;blockquote&gt;, &lt;form&gt;, and
    more.</p>

<div class="w3-container w3-dark-grey">
    <h2>This is a Header</h2>
</div>
<div class="w3-container w3-light-grey w3-text-brown">
    <p>
        This article is light grey and the text is brown.
        This article is light grey and the text is brown.
        This article is light grey and the text is brown.
        This article is light grey and the text is brown.
        This article is light grey and the text is brown.
    </p>
</div>
<div class="w3-container w3-dark-grey">
    <p class="w3-opacity">This is a footer.</p>
</div>

<hr>
<h2>W3.CSS Panels, Notes, and Quotes</h2>
<p>The <strong><a href="<?= $panels ?>">w3-panel</a></strong>
    class can display all kinds of notes and quotes:</p>

<div class="w3-container w3-round w3-border">
    <p>London is the most populous city in the United Kingdom,
        with a metropolitan area of over 9 million inhabitants.</p>
</div>
<br>
<div class="w3-container w3-light-grey w3-border">
    <p>London is the most populous city in the United Kingdom,
        with a metropolitan area of over 9 million inhabitants.</p>
</div>
<br>
<div class="w3-container w3-pale-red w3-leftbar w3-border-red">
    <p>London is the most populous city in the United Kingdom,
        with a metropolitan area of over 9 million inhabitants.</p>
</div>
<br>
<div class="w3-container w3-pale-green w3-bottombar w3-border-green w3-border">
    <p>London is the most populous city in the United Kingdom,
        with a metropolitan area of over 9 million inhabitants.</p>
</div>
<br>
<div class="w3-container w3-leftbar w3-sand">
    <p><i class="w3-xlarge w3-serif">"Make it as simple as possible, but not simpler."</i></p>
    <p>Albert Einstein</p>
</div>

<hr>
<h2>W3.CSS Alerts</h2>
<p>The <strong><a href="<?= $alerts ?>">w3-panel</a></strong>
    class can also be used for all kinds of alerts:</p>
<div class="w3-panel w3-red w3-display-container">
  <span onclick=""
        class="w3-button w3-red w3-large w3-display-topright">&times;</span>
    <h3>Danger!</h3>
    <p>Red often indicates a dangerous or negative situation.</p>
</div>

<div class="w3-panel w3-yellow w3-display-container">
  <span onclick="$.closeAlert(event)"
        class="w3-button w3-yellow w3-large w3-display-topright">&times;</span>
    <h3>Warning!</h3>
    <p>Yellow often indicates a warning that might need attention.</p>
</div>

<div class="w3-panel w3-green w3-display-container">
  <span onclick="$.closeAlert(event)"
        class="w3-button w3-green w3-large w3-display-topright">&times;</span>
    <h3>Success!</h3>
    <p>Green often indicates something successful or positive.</p>
</div>

<div class="w3-panel w3-blue w3-display-container">
  <span onclick="$.closeAlert(event)"
        class="w3-button w3-blue w3-large w3-display-topright">&times;</span>
    <h3>Info!</h3>
    <p>Blue often indicates a neutral informative change or action.</p>
</div>

<div>
    <h3>Example</h3>
    <div class="w3-code">
        &lt;div class=&quot;w3-panel w3-yellow&quot;&gt;<br>
        &nbsp; &lt;h3&gt;Warning!&lt;/h3&gt;<br>
        &nbsp; &lt;p&gt;Yellow often indicates a warning that might need attention.&lt;/p&gt;<br>
        &lt;/div&gt;
    </div>
</div>
<hr>

<h2>W3.CSS Cards</h2>
<p>The <strong><a href="<?= $cards ?>">w3-card</a></strong>
    classes are suitable for both images and notes:</p>

<div class="w3-cell-row">

    <div class="w3-cell w3-cell-top w3-card-4" style="width:60%">
        <header class="w3-container w3-blue">
            <h1>A Car</h1>
        </header>
        <div class="w3-container">
            <p>
                A car is a wheeled, self-powered motor vehicle used for transportation.
                Most definitions of the term specify that cars are designed to run primarily on roads,
                to have seating for one to eight people, and to typically have four wheels.
                <br><br>(Wikipedia)
            </p>
        </div>
    </div>
    <div class="w3-cell" style="width:16px"></div>
    <div class="w3-cell w3-cell-top w3-card-4">
        <div class="w3-container">
            <h2>Amazing</h2>
        </div>
        <img src="documentation-w3css_module/images/img_snowtops.jpg" alt="Car" style="width:100%">
        <div class="w3-container">
            <p>French Alps</p>
        </div>
    </div>
</div>
<div>
    <h3>Example</h3>
    <div class="w3-code">
        &lt;div class="w3-card-4"&gt;<br>&nbsp; &lt;img src="img_snowtops.jpg" alt="Alps"&gt;<br>
        &nbsp; &lt;div class=&quot;w3-container w3-center&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp;&lt;p&gt;French Alps&lt;/p&gt;<br>
        &nbsp; &lt;/div&gt;<br>&lt;/div&gt;
    </div>
</div>


<hr>
<h2>W3.CSS Tables</h2>
<p>The <strong><a href="<?= $tables ?>">w3-table</a></strong>
    classes can handle all kinds of tables:</p>

<table class="w3-table-all w3-striped w3-border w3-table-responsive" style="color:#000;">
    <thead>
    <tr class="w3-light-grey">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Points</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
    </tr>
    <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
    </tr>
    <tr>
        <td>Anja</td>
        <td>Bore</td>
        <td>100</td>
    </tr>
    </tbody>
</table>
<div>
    <h3>Example</h3>
    <div class="w3-code">
        &lt;table class="w3-table w3-striped w3-border"&gt;
    </div>
</div>

<hr>

<h2>W3.CSS Lists</h2>
<p>The <strong><a href="<?= $lists ?>">w3-ul</a></strong>
    class can handle all kinds of lists:</p>

<ul class="w3-ul w3-card w3-card-4">
    <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
        <img src="documentation-w3css_module/images/img_avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
        <span class="w3-large">Mike</span><br>
        <span>Web Designer</span>
    </li>
    <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="closeElement(event)"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
        <img src="documentation-w3css_module/images/img_avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
        <span class="w3-large">Jill</span><br>
        <span>Support</span>
    </li>
    <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="closeElement(event)"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
        <img src="documentation-w3css_module/images/img_avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
        <span class="w3-large">Jane</span><br>
        <span>Accountant</span>
    </li>
    <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="closeElement(event)"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
        <img src="documentation-w3css_module/images/img_avatar3.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
        <span class="w3-large">Jack</span><br>
        <span>Advisor</span>
    </li>
</ul>
<div>
    <h3>Example</h3>
    <div class="w3-code">
        &lt;ul class=&quot;w3-ul w3-border&quot;&gt;<br>&nbsp; &lt;li&gt;&lt;h2&gt;Names&lt;/h2&gt;&lt;/li&gt;<br>&nbsp;
        &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
        &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
    </div>
</div>

<hr>

<h2>W3.CSS Buttons</h2>
<p>The <a href="<?= $buttons ?>"><strong>w3-button</strong> and <strong>w3-btn</strong></a>
    class provides buttons of all sizes and types.</p>
<div class="w3-section">
    <button class="w3-button w3-ripple w3-red w3-padding">Button</button>
    <button class="w3-button w3-ripple w3-blue w3-padding">Button</button>
    <button class="w3-button w3-ripple w3-green w3-padding">Button</button>
    <button class="w3-button w3-ripple w3-teal w3-padding">Button</button>
    <button class="w3-button w3-ripple w3-black w3-padding">Button</button>
    <button class="w3-button w3-ripple w3-light-grey w3-padding">Button</button>
    <button class="w3-button w3-black w3-disabled w3-padding">Disabled</button>
</div>
<div class="w3-section">
    <button class="w3-btn w3-white w3-border">Button</button>
    <button class="w3-btn w3-light-grey w3-round">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-blue w3-round">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-red w3-text-red w3-round-large">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge">Button</button>
    <button class="w3-btn w3-black w3-padding-large w3-hover-red">Button</button>
</div>

<p>Wide buttons:</p>

<div class="w3-section">
    <button class="w3-button w3-block w3-border">Button</button>
</div>

<div class="w3-section">
    <button class="w3-button w3-block w3-teal">Button</button>
</div>

<div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button" style="width:33.3%">One</button>
    <button class="w3-bar-item w3-button" style="width:33.3%">Two</button>
    <button class="w3-bar-item w3-button" style="width:33.4%">Three</button>
</div>


<p>Circular or square buttons:</p>
<p>
    <a class="w3-button w3-xlarge w3-circle w3-ripple w3-black">+</a>
    <a class="w3-button w3-xlarge w3-circle w3-ripple w3-teal">+</a>
    <a class="w3-button w3-xlarge w3-circle w3-ripple w3-red w3-card-4">+</a>
</p>
<p>
    <a class="w3-button w3-xlarge w3-ripple w3-black">+</a>
    <a class="w3-button w3-xlarge w3-ripple w3-teal">+</a>
    <a class="w3-button w3-xlarge w3-ripple w3-red w3-card-4">+</a>
</p>

<hr>
<h2>W3.CSS Tags, Labels, Badges, and Signs</h2>
<p>The <a href="<?= $tags ?>"><strong>w3-tag</strong></a> and the
    <a href="<?= $badges ?>"><strong>w3-badge</strong></a>
    classes are capable of displaying all kinds of tags, labels, badges and signs:</p>
<p><span class="w3-badge w3-dark-grey">2</span>
    <span class="w3-badge w3-teal">8</span>
    <span class="w3-badge w3-red">A</span>
    <span class="w3-badge w3-orange w3-text-white">B</span></p>

<p><span class="w3-tag w3-dark-grey">New</span>
    <span class="w3-tag w3-orange w3-text-white">Warning</span>
    <span class="w3-tag w3-red">Danger</span>
    <span class="w3-tag w3-blue">Info</span>
</p>

<div class="w3-row">
    <div class="w3-half">
        <div class="w3-tag w3-round w3-green" style="padding:3px 3px">
            <div class="w3-tag w3-round w3-green" style="border:1px solid white">Falcon Ridge Parkway</div>
        </div>
        <p>
        <div class="w3-tag w3-jumbo w3-red">S</div>
        <div class="w3-tag w3-jumbo">A</div>
        <div class="w3-tag w3-jumbo w3-yellow">L</div>
        <div class="w3-tag w3-jumbo">E</div>
        </p>
    </div>
    <div class="w3-half">
        <div class="w3-tag w3-xlarge w3-padding-large w3-round-large w3-red w3-center">DO NOT<br>
            BREATHE<br>UNDER WATER
        </div>
    </div>
</div>
<hr>


<h2>W3.CSS Responsive</h2>
<p>The <a href="<?= $responsive ?>"><strong>Responsive Grid</strong></a>
    classes provide responsiveness for all device types: PC, laptop, tablet, and mobile.</p>
<!-- First row -->
<div class="w3-row-padding" style="margin:0 -16px 20px">

    <div class="w3-col m4">
        <div class="w3-col s6 w3-green w3-center">
            <p>1/2</p>
        </div>
        <div class="w3-col s6 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/2</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col s4 w3-green w3-center">
            <p>1/3</p>
        </div>
        <div class="w3-col s4 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/3</p>
        </div>
        <div class="w3-col s4 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/3</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col s4 w3-dark-grey w3-center">
            <p>1/3</p>
        </div>
        <div class="w3-col s8 w3-green w3-center w3-text-light-grey">
            <p>2/3</p>
        </div>
    </div>

</div>

<!-- Second row -->
<div class="w3-row-padding" style="margin:0 -16px 20px">

    <div class="w3-col m4">
        <div class="w3-col s3 w3-green w3-center">
            <p>1/4</p>
        </div>
        <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/4</p>
        </div>
        <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/4</p>
        </div>
        <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/4</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col s6 w3-green w3-center">
            <p>1/2</p>
        </div>
        <div class="w3-col s3 w3-dark-grey w3-center">
            <p>1/4</p>
        </div>
        <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/4</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col s8 w3-green w3-center">
            <p>2/3</p>
        </div>
        <div class="w3-col s4 w3-dark-grey w3-center w3-text-light-grey">
            <p>1/3</p>
        </div>
    </div>

</div>

<!-- Third row -->
<div class="w3-row-padding" style="margin:0 -16px 20px">

    <div class="w3-col m4">
        <div class="w3-col s12 w3-green w3-center w3-text-light-grey">
            <p>1/1</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col s3 w3-dark-grey w3-center">
            <p>1/4</p>
        </div>
        <div class="w3-col s3 w3-dark-grey w3-center">
            <p>1/4</p>
        </div>
        <div class="w3-col s6 w3-green w3-center">
            <p>1/2</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col s3 w3-dark-grey w3-center">
            <p>1/4</p>
        </div>
        <div class="w3-col s6 w3-green w3-center">
            <p>1/2</p>
        </div>
        <div class="w3-col s3 w3-dark-grey w3-center">
            <p>1/4</p>
        </div>
    </div>

</div>

<!-- Fourth row -->
<div class="w3-row-padding" style="margin:0 -16px 20px">

    <div class="w3-col m4">
        <div class="w3-col w3-center w3-dark-grey w3-text-light-grey" style="width:50px">
            <p>50px</p>
        </div>
        <div class="w3-rest w3-green w3-center w3-text-light-grey">
            <p>rest</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col s3 w3-dark-grey w3-center">
            <p>1/4</p>
        </div>
        <div class="w3-rest w3-green w3-center w3-text-light-grey">
            <p>rest</p>
        </div>
    </div>

    <div class="w3-col m4">
        <div class="w3-col w3-center w3-dark-grey w3-text-light-grey w3-left" style="width:100px">
            <p>100px</p>
        </div>
        <div class="w3-col w3-center w3-dark-grey w3-text-light-grey w3-right" style="width:45px">
            <p>45px</p>
        </div>
        <div class="w3-rest w3-green w3-center w3-text-light-grey">
            <p>rest</p>
        </div>
    </div>

</div>

<!-- Grid Layout examples -->
<div class="w3-row-padding" style="margin:0 -16px 20px">

    <div class="w3-col m4">

        <div class="w3-col s6">
            <div class="w3-col s12 w3-orange" style="width:92%;height:125px;margin-right:10px"></div>
        </div>

        <div class="w3-col s6">
            <div class="w3-col s12 w3-green" style="height:75px;margin-bottom:10px"></div>
            <div class="w3-col s6 w3-green" style="height:40px;"></div>
            <div class="w3-col s6 w3-dark-grey" style="height:40px"></div>
        </div>

    </div>

    <div class="w3-col m4">

        <div class="w3-col s3">
            <div class="w3-col s12 w3-orange" style="width:85%;height:126px;margin-right:20px"></div>
        </div>

        <div class="w3-col s6">
            <div class="w3-col s12 w3-green" style="height:50px;margin-bottom:10px"></div>
            <div class="w3-col s6 w3-green" style="height:31px;"></div>
            <div class="w3-col s6 w3-dark-grey" style="height:31px;margin-bottom:10px"></div>

            <div class="w3-col s4 w3-green" style="height:25px;"></div>
            <div class="w3-col s4 w3-dark-grey" style="height:25px"></div>
            <div class="w3-col s4 w3-green" style="height:25px"></div>
        </div>

        <div class="w3-col s3">
            <div class="w3-col s12 w3-orange" style="width:85%;height:126px;margin-left:10px"></div>
        </div>

    </div>

    <div class="w3-col m4">

        <div class="w3-col s12">
            <div class="w3-col s12 w3-orange" style="height:36px;margin-bottom:10px"></div>
        </div>

        <div class="w3-col s12">
            <div class="w3-col s12 w3-green" style="height:26.5px;margin-bottom:10px"></div>
            <div class="w3-col s8 w3-green" style="height:18px;"></div>
            <div class="w3-col s4 w3-dark-grey" style="height:18px;margin-bottom:10px"></div>

            <div class="w3-col s3 w3-green" style="height:15px;"></div>
            <div class="w3-col s3 w3-dark-grey" style="height:15px"></div>
            <div class="w3-col s3 w3-green" style="height:15px"></div>
            <div class="w3-col s3 w3-dark-grey" style="height:15px"></div>
        </div>

    </div>

</div>

<p>W3.CSS also supports a
    <a href="<?= $grid ?>" style="font-weight: 700">12 column mobile-first fluid grid</a>
    with small, medium, and large classes.</p>
<hr>

<h2>W3.CSS Display</h2>
<p>The <a href="<?= $display ?>"><strong>w3-display</strong></a> classes
    allow you to display HTML elements in specific positions:</p>
<div class="w3-row-padding" style="margin:0 -16px">

    <div class="w3-half">
        <div class="w3-display-container w3-green" style="height:250px;">
            <div class="w3-display-topleft w3-padding">Top Left</div>
            <div class="w3-display-topright w3-padding">Top Right</div>
            <div class="w3-display-bottomleft w3-padding">Bottom Left</div>
            <div class="w3-display-bottomright w3-padding">Bottom Right</div>
            <div class="w3-display-left w3-padding">Left</div>
            <div class="w3-display-right w3-padding">Right</div>
            <div class="w3-display-middle w3-padding">Middle</div>
            <div class="w3-display-topmiddle w3-hide-small w3-padding">Top Middle</div>
            <div class="w3-display-bottommiddle w3-hide-small w3-padding">Bottom Middle</div>
        </div>
    </div>
    <div class="w3-half">
        <p class="w3-margin-top w3-hide-medium w3-hide-large">
        <div class="w3-display-container w3-green">
            <img src="documentation-w3css_module/images/img_lights.jpg" alt="Pants" style="width:100%;height:250px">
            <div class="w3-display-topleft w3-padding">Top Left</div>
            <div class="w3-display-topright w3-padding">Top Right</div>
            <div class="w3-display-bottomleft w3-padding">Bottom Left</div>
            <div class="w3-display-bottomright w3-padding">Bottom Right</div>
            <div class="w3-display-left w3-padding">Left</div>
            <div class="w3-display-right w3-padding">Right</div>
            <div class="w3-display-middle w3-padding">Middle</div>
            <div class="w3-display-topmiddle w3-hide-small w3-padding">Top Middle</div>
            <div class="w3-display-bottommiddle w3-hide-small w3-padding">Bottom Middle</div>
        </div>
    </div>

</div>
<hr>

<h2>W3.CSS Modals</h2>
<p>The <a href="<?= $modal ?>"><strong>w3-modal</strong></a>
    class provides modal dialog in pure HTML:</p>
<button onclick="$.openModal('modalOne')"
        class="w3-button w3-dark-grey w3-hover-black w3-padding-16">Click to Open Modal
</button>

<div id="modalOne" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top w3-display-container">
        <header class="w3-container w3-teal">
      <span onclick="$.closeModal('modalOne')"
            class="w3-button w3-large w3-teal w3-display-topright">&times;</span>
            <h2>Header</h2>
        </header>
        <div class="w3-container">
            <p>Some text. Some text. Some text.</p>
            <p>Some text. Some text. Some text.</p>
        </div>
        <footer class="w3-container w3-teal">
            <p>Footer</p>
        </footer>
    </div>
</div>
<br><br>
<p>Modal Image:</p>
<img class="w3-hover-opacity" src="documentation-w3css_module/images/img_nature.jpg" alt="Nature"
     onclick="$.openModal('imageModal')"
     style="width:22%;cursor:pointer">

<div id="imageModal" class="w3-modal" onclick="$.closeModal('imageModal')">
    <span class="w3-button w3-hover-red w3-xxlarge w3-display-topright" style="top:43px;">&times;</span>
    <div class="w3-modal-content w3-card-4 w3-animate-zoom">
        <img src="documentation-w3css_module/images/img_nature_wide.jpg" alt="Nature" style="width:100%">
    </div>
</div>

<hr>

<h2>W3.CSS Progress Bars</h2>
<p>Read more at <a href="<?= $progressbar ?>"><strong>W3.CSS Progress Bars</strong></a>

<div class="w3-dark-grey">
    <div class="w3-container w3-green w3-center w3-padding" style="width:25%">25%</div>
</div><br>

<div class="w3-light-grey">
    <div class="w3-container w3-red w3-center w3-padding" style="width:50%">50%</div>
</div><br>

<div class="w3-light-grey">
    <div id="progressBarOne" class="w3-container w3-padding w3-green" style="width:5%">0</div>
</div><br>

<button class="w3-button w3-dark-grey" onclick="$.moveProgressBar('progressBarOne', 100)">Click Me</button>

<hr>

<h2>W3.CSS Dropdowns</h2>
<p>The <a href="<?= $dropdowns ?>"><strong>w3-dropdown</strong></a>
    classes provide dropdowns:</p>
<div class="w3-row">
    <div class="w3-col s6">
        <div class="w3-dropdown-hover">
            <button class="w3-button w3-dark-grey">Hover Me!</button>
            <div class="w3-dropdown-content w3-bar-block w3-border">
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
            </div>

        </div>
    </div>
    <div class="w3-col s6">
        <div class="w3-dropdown-click">
            <button onclick="$.toggleDropdown('dropdownOne', 'w3-show')" class="w3-button w3-dark-grey">Click Me!</button>
            <div id="dropdownOne" class="w3-dropdown-content w3-bar-block w3-card-4">
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
            </div>
        </div>
    </div>
</div>

<hr>
<h2>W3.CSS Accordions</h2>
<p>Read more at <a href="<?= $accordions ?>"><strong>W3.CSS Accordions</strong></a></p>

<button onclick="$.toggleAccordion('accordionOne')" class="w3-hover-dark-grey w3-light-grey w3-button w3-block w3-left-align">Open
    Section 1
</button>
<div id="accordionOne" class="w3-hide accordion-item">
    <div class="w3-container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
    </div>
</div>
<button onclick="$.toggleAccordion('accordionTwo')" class="w3-hover-dark-grey w3-light-grey w3-button w3-block w3-left-align">Open
    Section 2
</button>
<div id="accordionTwo" class="w3-hide w3-bar-block accordion-item">
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
</div>
<button onclick="$.toggleAccordion('accordionThree')" class="w3-hover-dark-grey w3-light-grey w3-button w3-block w3-left-align">Open
    Section 3
</button>
<div id="accordionThree" class="w3-hide w3-black accordion-item">
    <div class="w3-container">
        <p>Accordion with Images:</p>
        <img src="documentation-w3css_module/images/img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
        <p>French Alps</p>
    </div>
</div>
<hr>

<h2>W3.CSS Tabs</h2>
<p><a href="<?= $tabulators ?>"><strong>Tabs</strong></a> are perfect for single page web applications, or for web
    pages capable of displaying different subjects.</p>
<div class="w3-border">
    <div class="w3-bar w3-light-grey">
        <a href="javascript:void(0)" class="w3-bar-item w3-button tabActivateButton"
           onclick="$.switchTab(event, 'London', 'tabs', 'tabActivateButton', 'w3-red')">London</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button tabActivateButton" onclick="$.switchTab(event, 'Paris')">Paris</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button tabActivateButton" onclick="$.switchTab(event, 'Tokyo')">Tokyo</a>
    </div>

    <div id="London" class="w3-container tabs w3-animate-opacity w3-red">
        <h2>London</h2>
        <p>London is the capital of England.</p>
        <p>It is the most populous city in the United Kingdom,
            with a metropolitan area of over 9 million inhabitants.</p>
    </div>

    <div id="Paris" class="w3-container tabs w3-animate-opacity w3-red">
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
        <p>The Paris area is one of the largest population centers in Europe,
            with more than 12 million inhabitants.</p>
    </div>

    <div id="Tokyo" class="w3-container tabs w3-animate-opacity w3-red">
        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
        <p>It is the center of the Greater Tokyo Area,
            and the most populous metropolitan area in the world.</p>
    </div>
</div>
<br>

<p>Tabbed Image Gallery (Click on one of the pictures):</p>

<div class="w3-row-padding w3-margin-top" style="margin:0 -16px">
    <div class="w3-col s3 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity tabbed-image-gallery-button" onclick="$.openTabbedImage('Nature');">
            <img src="documentation-w3css_module/images/img_nature.jpg" alt="Nature" style="width:100%">
        </a>
    </div>
    <div class="w3-col s3 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity tabbed-image-gallery-button" onclick="$.openTabbedImage('Snow');">
            <img src="documentation-w3css_module/images/img_snowtops.jpg" alt="Fjords" style="width:100%">
        </a>
    </div>
    <div class="w3-col s3 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity tabbed-image-gallery-button" onclick="$.openTabbedImage('Mountains');">
            <img src="documentation-w3css_module/images/img_mountains.jpg" alt="Mountains" style="width:100%">
        </a>
    </div>
    <div class="w3-col s3 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity tabbed-image-gallery-button" onclick="$.openTabbedImage('Lights');">
            <img src="documentation-w3css_module/images/img_lights.jpg" alt="Lights" style="width:100%">
        </a>
    </div>
</div>
<br>
<div id="Nature" class="picture w3-display-container tabbed-image-gallery-item">
    <img src="documentation-w3css_module/images/img_nature_wide.jpg" alt="Nature" style="width:100%">
    <span onclick="$.hide(event)"
          class="w3-display-topright w3-button w3-xlarge w3-transparent w3-text-white">&times;</span>
    <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Nature</div>
</div>

<div id="Snow" class="picture w3-display-container tabbed-image-gallery-item">
    <img src="documentation-w3css_module/images/img_snow_wide.jpg" alt="Snow" style="width:100%">
    <span onclick="$.hide(event)"
          class="w3-display-topright w3-button w3-xlarge w3-transparent w3-text-white">&times;</span>
    <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Snow</div>
</div>

<div id="Mountains" class="picture w3-display-container tabbed-image-gallery-item">
    <img src="documentation-w3css_module/images/img_mountains_wide.jpg" alt="Mountains" style="width:100%">
    <span onclick="$.hide(event)"
          class="w3-display-topright w3-button w3-xlarge w3-transparent">&times;</span>
    <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Mountains</div>
</div>

<div id="Lights" class="picture w3-display-container tabbed-image-gallery-item">
    <img src="documentation-w3css_module/images/img_lights_wide.jpg" alt="Lights" style="width:100%">
    <span onclick="$.hide(event)"
          class="w3-display-topright w3-button w3-xlarge w3-transparent w3-text-white">&times;</span>
    <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Northern Lights</div>
</div>

<hr>

<h2>W3.CSS Navigation</h2>
<p>The <a href="<?= $navigation ?>"><strong>w3-bar</strong></a> class can be used to create a navigation bar:</p>

<div class="w3-bar w3-black">
    <a href="javascript:void(0)" class="w3-bar-item w3-button">Home</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 2</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 3</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>

<p>Navigation bar with input:</></p>
<div class="w3-bar w3-light-grey w3-border">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green w3-mobile">Home</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 1</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 2</a>
    <input type="text" class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search..">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-black w3-mobile">Go</a>
</div>

<p>Navigation bar with dropdown:</p>
<div class="w3-bar w3-light-grey">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 1</a>
    <div class="w3-dropdown-hover w3-mobile">
        <button class="w3-button">Dropdown <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a class="w3-bar-item w3-button" href="javascript:void(0)" class="w3-text-black">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)" class="w3-text-black">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)" class="w3-text-black">Link 3</a>
        </div>
    </div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-mobile"><i class="fa fa-search"></i></a>
</div>
<div class="w3-hide-small">
    <p>Customized bars:</p>


    <div class="w3-bar w3-dark-grey">
        <a class="w3-bar-item w3-button w3-mobile w3-green" style="width:33%" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-mobile" style="width:34%" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-mobile" style="width:33%" href="javascript:void(0)">Link 2</a>
    </div>

    <br>

    <div class="w3-bar w3-black">
        <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-text-grey w3-hover-text-white"
           href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-bottombar w3-border-red"
           href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-text-grey w3-hover-text-white"
           href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-text-grey w3-hover-text-white"
           href="javascript:void(0)">Link 3</a>
        <a href="javascript:void(0)"
           class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-black w3-text-grey w3-hover-text-white"><i
                    class="fa fa-search"></i></a>
    </div>
</div>
<hr>

<p>The <a href="<?= $sidebar ?>"><strong>w3-sidebar</strong></a> class creates a side navigation:</p>

<iframe src="<?= $sidebar ?>" style="height:350px;width:100%;border:none;" class="w3-border" id="I2"
        name="I2"></iframe>
<hr>

<h2>W3.CSS Pagination</h2>
<p>W3.CSS provides simple ways for <a href="<?= $pagination ?>"><strong>page pagination</strong></a>.</p>

<div class="w3-bar">
    <a class="w3-bar-item w3-button" href="javascript:void(0)">&laquo;</a>
    <a class="w3-bar-item w3-button w3-black" href="javascript:void(0)">1</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">2</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">3</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">4</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">5</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">&raquo;</a>
</div>
<br>
<div class="w3-bar w3-border w3-round">
    <a href="javascript:void(0)" class="w3-button">&#10094; Previous</a>
    <a href="javascript:void(0)" class="w3-button w3-right">Next &#10095;</a>
</div>
<br>
<div class="w3-center">
    <div class="w3-bar">
        <a href="javascript:void(0)" class="w3-button w3-border">&#10094;</a>
        <a href="javascript:void(0)" class="w3-button w3-border">&#10095;</a>
    </div>
</div>

<hr>

<h2>Slideshows</h2>
<p>W3.CSS provide <a href="<?= $slideshows ?>"><strong>slideshows</strong></a> for cycling through images or other
    content:</p>

<div class="w3-content w3-display-container" style="max-width:1000px">
    <div class="w3-display-container slide-item">
        <img src="documentation-w3css_module/images/img_nature_wide.jpg" style="width:100%">
        <div class="w3-display-topleft w3-padding w3-text-white w3-small">
            1 / 3
        </div>
        <div class="w3-display-topright w3-text-white w3-padding w3-hide-small">
            Beautiful Nature
        </div>
    </div>
    <div class="w3-display-container slide-item">
        <img src="documentation-w3css_module/images/img_snow_wide.jpg" style="width:100%">
        <div class="w3-display-topleft w3-text-white w3-padding w3-small">
            2 / 3
        </div>
        <div class="w3-display-topright w3-text-white w3-padding w3-hide-small">
            French Alps
        </div>
    </div>
    <div class="w3-display-container slide-item">
        <img src="documentation-w3css_module/images/img_mountains_wide.jpg" style="width:100%">
        <div class="w3-display-topleft w3-text-white w3-padding w3-small">
            3 / 3
        </div>
        <div class="w3-display-topright w3-text-black w3-padding w3-hide-small">
            Mountains
        </div>
    </div>
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
        <div class="w3-left w3-hover-text-khaki w3-large arrow" onclick="$.slideSwitcher(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki w3-large arrow" onclick="$.slideSwitcher(1)">&#10095;</div>
        <span class="w3-badge slide-dots w3-border w3-hover-white" onclick="$.currentSlide(1)"></span>
        <span class="w3-badge slide-dots w3-border w3-hover-white" onclick="$.currentSlide(2)"></span>
        <span class="w3-badge slide-dots w3-border w3-hover-white" onclick="$.currentSlide(3)"></span>
    </div>
</div>

<hr>

<h2>Lightbox</h2>
<p>Combine <a href="<?= $modal ?>">Modals</a> and <a href="<?= $slideshows ?>">Slideshows</a> to create a lightbox
    (modal image gallery):</p>
<div id="modalLightOne" class="w3-modal w3-black">
    <span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright pointer"
          title="Close Lightbox" onclick="$.closeLightbox()">&times;</span>
    <div class="w3-modal-content">

        <div class="w3-content" style="max-width:1200px">
            <img class="lightbox-item" src="documentation-w3css_module/images/img_nature_wide.jpg" style="width:100%">
            <img class="lightbox-item" src="documentation-w3css_module/images/img_snow_wide.jpg" style="width:100%">
            <img class="lightbox-item" src="documentation-w3css_module/images/img_mountains_wide.jpg" style="width:100%">
            <div class="w3-row w3-black w3-center">
                <div class="w3-container w3-display-container">
                    <p id="lightbox-caption-id"></p>
                    <span class="w3-display-middle w3-hover-text-grey w3-large arrow" style="left:2%"
                          onclick="$.stepLightbox(-1)" title="Previous image">&#10094;</span>
                    <span class="w3-display-middle w3-hover-text-grey w3-large arrow" style="left:98%"
                          onclick="$.stepLightbox(1)" title="Next image">&#10095;</span>
                </div>

                <div class="w3-col s4">
                    <img class="lightbox-dots w3-opacity w3-hover-opacity-off pointer" src="documentation-w3css_module/images/img_nature_wide.jpg"
                         style="width:100%" onclick="$.currentLightbox(1)" alt="Nature and sunrise">
                </div>
                <div class="w3-col s4">
                    <img class="lightbox-dots w3-opacity w3-hover-opacity-off pointer" src="documentation-w3css_module/images/img_snow_wide.jpg"
                         style="width:100%" onclick="$.currentLightbox(2)" alt="French Alps">
                </div>
                <div class="w3-col s4">
                    <img class="lightbox-dots w3-opacity w3-hover-opacity-off pointer" src="documentation-w3css_module/images/img_mountains_wide.jpg"
                         style="width:100%" onclick="$.currentLightbox(3)" alt="Mountains and fjords">
                </div>
            </div> <!-- End row -->
        </div> <!-- End w3-content -->

    </div> <!-- End modal content -->
</div> <!-- End modal -->

<div class="w3-row-padding" style="margin:16px -16px 0 -16px">
    <div class="w3-col s4">
        <img src="documentation-w3css_module/images/img_nature_wide.jpg" style="width:100%;cursor:pointer" onclick="$.openLightbox();$.currentLightbox(1)" class="w3-hover-shadow cursor">
    </div>
    <div class="w3-col s4">
        <img src="documentation-w3css_module/images/img_snow_wide.jpg" style="width:100%;cursor:pointer" onclick="$.openLightbox();$.currentLightbox(2)" class="w3-hover-shadow cursor">
    </div>
    <div class="w3-col s4">
        <img src="documentation-w3css_module/images/img_mountains_wide.jpg" style="width:100%;cursor:pointer" onclick="$.openLightbox();$.currentLightbox(3)" class="w3-hover-shadow cursor">
    </div>
</div>

<hr>

<h2>W3.CSS Animations</h2>
<p>The <strong><a href="<?= $animate ?>">w3-animate</a></strong>
    classes provide an easy way to slide and fade in elements:</p>
<br>
<div class="w3-center">
    <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="$.animate('top')">Top</button>
    <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="$.animate('bottom')">Bottom</button>
    <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="$.animate('left')">Left</button>
    <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="$.animate('right')">Right</button>
    <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="$.animate('fade')">Fade In</button>
    <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="$.animate('zoom')">Zoom</button>
    <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="$.animate('spin')">Spin</button>
</div>
<div class="w3-center">
    <div id="top" class="animate w3-animate-top">Animation is Fun!</div>
    <div id="bottom" class="animate w3-animate-bottom">Animation is Fun!</div>
    <div id="left" class="animate w3-animate-left">Animation is Fun!</div>
    <div id="right" class="animate w3-animate-right">Animation is Fun!</div>
    <div id="fade" class="animate w3-animate-opacity">Animation is Fun!</div>
    <div id="zoom" class="animate w3-animate-zoom">Animation is Fun!</div>
    <div id="spin" class="animate w3-spin">Animation is Fun!</div>
    <div id="normal" class="animate ">Animation is Fun!</div>
</div>
<hr>

<h2>W3.CSS Images</h2>
<p>Styling <a href="<?= $images ?>">images</a> in W3CSS is easy:</p>

<div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px;">
    <div class="w3-col m3 s4">
        <img src="documentation-w3css_module/images/img_lights.jpg" class="w3-round testsm" alt="Northern Lights" style="width:85%">
    </div>
    <div class="w3-col m3 s4">
        <img src="documentation-w3css_module/images/img_forest.jpg" class="w3-circle testsm" alt="Forest" style="width:85%">
    </div>
    <div class="w3-col m3 s4">
        <img src="documentation-w3css_module/images/img_mountains.jpg" class="testsm w3-hover-opacity w3-border" alt="Mountains"
             style="padding:4px;width:85%">
    </div>
    <div class="w3-col m3 w3-hide-small">
        <div class="w3-display-container">
            <img src="documentation-w3css_module/images/img_nature.jpg" alt="Nature" style="width:85%" class="w3-card-4 testsm">
            <div class="w3-display-bottomleft w3-text-white w3-container w3-padding" style="width:85%">Nature</div>
        </div>
    </div>

</div>
<div style="clear:both;margin-bottom:28px;"></div>

<hr>

<h2>W3.CSS Effects</h2>
<p>Add special <a href="<?= $effects ?>">effects</a> to any element:</p>
<div class="w3-row-padding w3-center" style="margin:0 -16px">

    <div class="w3-col m3 w3-hide-small">
        <img src="documentation-w3css_module/images/img_workshop.jpg" style="width:100%">
        <div class="w3-red w3-container">
            <p>Normal</p>
        </div>
    </div>

    <div class="w3-col m3 s4 w3-opacity">
        <img src="documentation-w3css_module/images/img_workshop.jpg" style="width:100%;">
        <div class="w3-red w3-container">
            <p>Opacity</p>
        </div>
    </div>

    <div class="w3-col m3 s4 w3-grayscale">
        <img src="documentation-w3css_module/images/img_workshop.jpg" style="width:100%;">
        <div class="w3-red w3-container">
            <p>Grayscale</p>
        </div>
    </div>

    <div class="w3-col m3 s4 w3-sepia">
        <img src="documentation-w3css_module/images/img_workshop.jpg" style="width:100%;">
        <div class="w3-red w3-container">
            <p>Sepia
            <p>
        </div>
    </div>

</div>
<hr>

<h2>W3.CSS Input Forms</h2>
<p>The <strong><a href="<?= $input ?>">w3-input</a></strong>
    classes are for input forms:</p>

<input class="w3-input w3-border w3-light-grey" type="text" placeholder="Name">
<br>
<input class="w3-input w3-border w3-border-blue" type="text" placeholder="Country">
<br>
<div class="w3-row-padding w3-margin-bottom" style="margin:0 -16px">
    <div class="w3-third">
        <input class="w3-input" type="text" placeholder="One">
    </div>
    <div class="w3-third">
        <input class="w3-input" type="text" placeholder="Two">
    </div>
    <div class="w3-third">
        <input class="w3-input" type="text" placeholder="Three">
    </div>
</div>

<input class="w3-input w3-border w3-animate-input" type="text" style="width:30%;" placeholder="Click on me!">

<div class="w3-row-padding w3-margin-top" style="margin:0 -16px">

    <div class="w3-half">
        <div class="w3-card-4">
            <div class="w3-container w3-blue">
                <h2>Input Form</h2>
            </div>
            <form class="w3-container">
                <p><label>Name</label>
                    <input class="w3-input" type="text" style="width:90%" required>
                </p>
                <p><label>Email</label>
                    <input class="w3-input" type="email" style="width:90%" required>
                </p>
                <p><label>Subject</label>
                    <textarea class="w3-input" style="width:90%;resize: vertical;" cols="20" name="S3"
                              rows="1"></textarea>
                </p>
                <br>
                <p><label>Milk</label>
                    <input id="milk" class="w3-check" type="checkbox" checked="checked">
                </p>
                <p><label>Sugar</label>
                    <input id="sugar" class="w3-check" type="checkbox">
                </p>
                <p><label>Lemon (Disabled)</label>
                    <input id="lemon" class="w3-check" type="checkbox" disabled>
                </p>
            </form>
        </div>
    </div>

    <div class="w3-half">
        <div class="w3-card-4">
            <div class="w3-container w3-red">
                <h2>Input Form</h2>
            </div>
            <form class="w3-container">
                <p>
                    <label>Name</label>
                    <input class="w3-input" type="text" style="width:90%" required>
                </p>
                <p>
                    <label>Email</label>
                    <input class="w3-input" type="email" style="width:90%" required>
                </p>
                <p>
                    <label>Subject</label>
                    <textarea class="w3-input" style="width:90%;resize: vertical;" cols="20" name="S4"
                              rows="1"></textarea>
                </p>
                <br>
                <p>
                    <label>Male</label>
                    <input class="w3-radio" type="radio" name="gender" value="male" checked="true">
                </p>
                <p>
                    <label>Female</label>
                    <input class="w3-radio" type="radio" name="gender" value="female">
                </p>
                <p>
                    <label>Don't know (Disabled)</label>
                    <input class="w3-radio" type="radio" name="gender" value="" disabled>
                </p></form>
        </div>
    </div>
</div>
<hr>

<h2>W3.CSS Filters</h2>
<p>Use <a href="#">W3.CSS Filters</a> to search for a specific element inside a list, table, dropdown,
    etc:</p>
<input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="filter-field"
       onkeyup="$.filterList('filter-field', 'filter-table', 'table')">

<table class="w3-table-all w3-striped w3-bordered w3-border w3-margin-top" id="filter-table" style="color:#000">
    <tr>
        <th style="width:60%;">Name</th>
        <th style="width:40%;">Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Berglunds snabbkop</td>
        <td>Sweden</td>
    </tr>
    <tr>
        <td>Island Trading</td>
        <td>UK</td>
    </tr>
    <tr>
        <td>Koniglich Essen</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Canada</td>
    </tr>
    <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Italy</td>
    </tr>
    <tr>
        <td>North/South</td>
        <td>UK</td>
    </tr>
    <tr>
        <td>Paris specialites</td>
        <td>France</td>
    </tr>
</table>


<input class="w3-input w3-border w3-padding w3-margin-top" type="text" placeholder="Search for fruits.." id="filter-fruits"
       onkeyup="$.filterList('filter-fruits', 'filter-list', 'list')">
<ul id="filter-list">
    <li>Apple</li>
    <li>Orange</li>
    <li>Banana</li>
    <li>Peach</li>
    <li>Melon</li>
    <li>Cherry</li>
</ul>


<hr>

<h2>W3.CSS Fonts</h2>
<p>With W3.CSS it is extremely easy to add <a href="#"><strong>fonts</strong></a> to a web page:</p>

<div class="w3-tangerine">
    Making the web beautiful!
</div>

<div class="w3-lobster">
    Making the web!
</div>
<hr>

<h2>W3.CSS Tooltips</h2>
<p>The <strong><a href="#">w3-tooltip</a></strong>
    class can display all kinds of tooltips:</p>

<p class="w3-tooltip">Hover over this text!
    <span class="w3-text w3-tag">Tooltip content</span></p>
<p class="w3-tooltip">Hover over this text!
    <span class="w3-text w3-tag w3-theme w3-animate-opacity w3-round-large">Tooltip content</span></p>
<hr>

<h2>Color Themes</h2>
<p>Color themes can easily be added to any web application:</p>

<div class="w3-row-padding" style="margin:0 -16px">
    <div class="w3-half">
        <div class="w3-card">
            <div class="w3-container w3-indigo">
                <h3>Theme Indigo</h3>
            </div>
            <div class="w3-container w3-text-indigo"><h4>Movies 2014</h4></div>
            <ul class="w3-ul">
                <li>
                    <h4>Frozen</h4>
                    <p>The response to the animations was ridiculous</p>
                </li>
                <li>
                    <h4>The Fault in Our Stars</h4>
                    <p>Touching, gripping and genuinely well made</p>
                </li>
                <li>
                    <h4>The Avengers</h4>
                    <p>A huge success for Marvel and Disney</p>
                </li>
            </ul>

            <div class="w3-container w3-indigo w3-xlarge">&laquo;<span class="w3-right">&raquo;</span></div>
        </div>
    </div>

    <div class="w3-half">
        <div class="w3-card">
            <div class="w3-container w3-teal">
                <h3>Theme Teal</h3>
            </div>
            <div class="w3-container w3-text-teal"><h4>Movies 2014</h4></div>
            <ul class="w3-ul">
                <li>
                    <h4>Frozen</h4>
                    <p>The response to the animations was ridiculous</p>
                </li>
                <li>
                    <h4>The Fault in Our Stars</h4>
                    <p>Touching, gripping and genuinely well made</p>
                </li>
                <li>
                    <h4>The Avengers</h4>
                    <p>A huge success for Marvel and Disney</p>
                </li>
            </ul>
            <div class="w3-container w3-teal w3-xlarge">&laquo;<span class="w3-right">&raquo;</span></div>
        </div>
    </div>
</div>

<div class="w3-panel w3-note">
    <p>Color themes are a perfect match for mobile applications.</p>
</div>


