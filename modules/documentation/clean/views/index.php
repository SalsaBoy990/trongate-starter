<div x-data="ajaxSearchData" x-cloak x-init="panelOpen = false; searchTerm = ''">
    <section class="banner">
        <h1>Section Banner</h1>
        <p>This is a description of this section</p>
        <div class="searchbar relative">
            <input @keydown="searchByTitle('<?= BASE_URL ?>' + 'api/get/entries/')" x-model="searchTerm"
                   @click="togglePanel()" type="search"
                   placeholder="Search in entries"/>
            <b class="left margin-left-8">
                <i class="fa fa-search" aria-hidden="true"></i>
            </b>
        </div>
    </section>

    <div x-cloak class="search-results relative">
        <div x-cloak x-show="panelOpen" :class="{'show': panelOpen }"
             class="card white absolute padding z-2 hide">
            <span @click="clearSearch()"
                  class="close-button large topright">&times;</span>
            <h2 class="normal" x-text="'Results (' + count + ')'"></h2>
            <div id="search-results">
                <template x-for="item in results">
                    <div class="clean-container round border border-default margin-y">
                        <b>
                            <a :href="'<?= BASE_URL ?>' + 'entries/show/' + item.id" x-text="item.title"></a>
                        </b>
                        <p class="small" x-text="item.content.substr(0, 120) + '...'"></p>
                    </div>
                </template>
            </div>

        </div>
    </div>
</div>


<div x-data="{ showToc: true}" class="main-container container relative">
    <span @click="showToc = ! showToc" class="pointer absolute padding-small" role="button" title="Table of content">
        <i :class="{'fa fa-arrow-left' : showToc,  'fa fa-arrow-right' : !showToc }" aria-hidden="true"></i>
    </span>

    <aside x-show="showToc" x-transition class="toc">
        <h2> Table of Contents </h2>
        <nav>
            <a href="#"><h3>Elements</h3></a>

            <a href="#"><h3>Buttons</h3></a>

            <a href="#"><h3>Headings</h3></a>
            <a href="#"><h4>Heading 2</h4></a>

            <a href="#"><h3>Lists</h3></a>
            <a href="#"><h4>Ordered</h4></a>
            <a href="#"><h4>Unordered</h4></a>
            <a href="#"><h4>Nested</h4></a>
            <a href="#"><h4>Definition Lists</h4></a>

            <a href=""><h3>Tables</h3></a>

            <a href=""><h3>Video</h3></a>
        </nav>
    </aside>

    <main class="content">

        <h1> Elements </h1>
        <h1> Buttons </h1>

        <div class="section">
            <a class="button ripple padding-16 large red border-red hover-dark-red hover-border-dark-red shadow">Button</a>
            <button class="ripple small medium-blue border-medium-blue border-blue hover-blue shadow">Button</button>
            <a class="button ripple medium green border-green hover-dark-green hover-border-dark-green">Button</a>
            <button class="ripple normal teal border-teal hover-dark-teal hover-border-dark-teal">Button</button>
        </div>

        <h1> Headings </h1>
        <h2> Heading 2 </h2>
        <h3> Heading 3 </h3>
        <h4> Heading 4 </h4>
        <h5> Heading 5 </h5>
        <h6> Heading 6 </h6>

        <h1> Lists </h1>

        <h2> Ordered </h2>
        <ol>
            <li> First</li>
            <li> Second</li>
            <li> Third</li>
        </ol>

        <h2> Unordered </h2>
        <ul>
            <li> Item C</li>
            <li> Item A</li>
            <li> Item B</li>
        </ul>

        <h2> Nested </h2>
        <ol>
            <li>
                First
                <ul>
                    <li> Item A</li>
                    <li> Item B</li>
                </ul>
            </li>
            <li> Second</li>
            <li> Third</li>
        </ol>

        <h2> Definition Lists </h2>
        <dl>
            <dt> Term</dt>
            <dd> Definition 1</dd>
            <dd> Definition 2</dd>
            <dd> Definition 3</dd>
        </dl>

        <h2> Tables </h2>

        <table>
            <thead>
            <tr>
                <th> ID</th>
                <th> Column A</th>
                <th> Column B</th>
                <th> Column C</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> 0</td>
                <td> Apple</td>
                <td> Pear</td>
                <td> Mango</td>
            </tr>
            <tr>
                <td> 1</td>
                <td> Banana</td>
                <td> Kiwi</td>
                <td> Grape</td>
            </tr>
            <tr>
                <td> 2</td>
                <td> Orange</td>
                <td> Lemon</td>
                <td> Lime</td>
            </tr>
            </tbody>
        </table>

        <h2> Video </h2>
        <video controls title="Test Video">
            <source src="documentation-clean_module/vids/GNOME-Workspace-Switch.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <hr>

        <h2>Clean.CSS Colors</h2>
        <p>The <a href="#">color</a>
            classes are inspired by modern colors used in marketing, road signs, and sticky notes:</p>
        <div class="row">
            <div class="quarter">
                <div class="clean-container purple center padding-16"><p>&nbsp;</p></div>
                <div class="clean-container green center padding-16"><p>&nbsp;</p></div>
            </div>
            <div class="quarter">
                <div class="clean-container pink center padding-16"><p>&nbsp;</p></div>
                <div class="clean-container teal center padding-16"><p>&nbsp;</p></div>
            </div>
            <div class="quarter hide-small">
                <div class="clean-container orange text-white center padding-16"><p>&nbsp;</p></div>
                <div class="clean-container cyan text-white center padding-16"><p>&nbsp;</p></div>
            </div>
            <div class="quarter hide-small">
                <div class="clean-container yellow center padding-16"><p>&nbsp;</p></div>
                <div class="clean-container lime center padding-16"><p>&nbsp;</p></div>
            </div>
        </div>

        <hr>

        <h2>Clean.CSS Containers</h2>
        <p>The <a href="#">clean-container</a> class is the most important of the
            Clean.CSS
            classes. It provides equality like:</p>
        <ul>
            <li>Common margins</li>
            <li>Common paddings</li>
            <li>Common vertical alignments</li>
            <li>Common horizontal alignments</li>
            <li>Common fonts</li>
            <li>Common colors</li>
        </ul>

        <p>The clean-container class is typically used with HTML container elements, like:</p>
        <p>&lt;div&gt;, &lt;header&gt;, &lt;footer&gt;, &lt;article&gt;, &lt;section&gt;, &lt;blockquote&gt;, &lt;form&gt;,
            and
            more.</p>

        <article>
            <div class="clean-container dark-grey round-top">
                <h4>This is a Header</h4>
            </div>
            <div class="clean-container light-grey text-brown">
                <p>
                    This article is light grey and the text is brown.
                    This article is light grey and the text is brown.
                    This article is light grey and the text is brown.
                    This article is light grey and the text is brown.
                    This article is light grey and the text is brown.
                </p>
            </div>
            <div class="clean-container dark-grey round-bottom">
                <p class="opacity">This is a footer.</p>
            </div>
        </article>

        <hr>

        <h2>Clean.CSS Panels, Notes, and Quotes</h2>
        <p>The <a href="#">panel</a>
            class can display all kinds of notes and quotes:</p>

        <div class="clean-container round border border-default margin-top margin-bottom">
            <p>London is the most populous city in the United Kingdom,
                with a metropolitan area of over 9 million inhabitants.</p>
        </div>

        <div class="clean-container round light-grey border border-default margin-top margin-bottom">
            <p>London is the most populous city in the United Kingdom,
                with a metropolitan area of over 9 million inhabitants.</p>
        </div>

        <div class="clean-container round pale-red leftbar border border-red margin-top margin-bottom">
            <p>London is the most populous city in the United Kingdom,
                with a metropolitan area of over 9 million inhabitants.</p>
        </div>

        <div class="clean-container round pale-green bottombar border-green border margin-top margin-bottom">
            <p>London is the most populous city in the United Kingdom,
                with a metropolitan area of over 9 million inhabitants.</p>
        </div>

        <div class="clean-container round leftbar border border-default sand margin-top margin-bottom">
            <p><i class="xlarge serif">"Make it as simple as possible, but not simpler."</i></p>
            <p>Albert Einstein</p>
        </div>

        <hr>

        <h2>Clean.CSS Alerts</h2>
        <p>The <a href="#">panel</a>
            class can also be used for all kinds of alerts:</p>
        <div x-data="alertData" x-show="openAlert" class="panel pale-red text-dark-red border border-dark-red relative">
            <span @click="hideAlert()" class="close-button large topright">&times;</span>
            <h3>Danger!</h3>
            <p>Red often indicates a dangerous or negative situation.</p>
        </div>

        <div x-data="alertData" x-show="openAlert"
             class="panel pale-yellow text-dark-yellow border border-dark-yellow relative">
            <span @click="hideAlert()" class="close-button large topright">&times;</span>
            <h3>Warning!</h3>
            <p>Yellow often indicates a warning that might need attention.</p>
        </div>

        <div x-data="alertData" x-show="openAlert"
             class="panel pale-green text-dark-green border border-dark-green relative">
            <span @click="hideAlert()" class="close-button large topright">&times;</span>
            <h3>Success!</h3>
            <p>Green often indicates something successful or positive.</p>
        </div>

        <div x-data="alertData" x-show="openAlert" class="panel pale-blue text-blue border border-blue relative">
            <span @click="hideAlert()" class="close-button large topright">&times;</span>
            <h3>Info!</h3>
            <p>Blue often indicates a neutral informative change or action.</p>
        </div>

        <hr>

        <h2>Clean.CSS Cards</h2>
        <p>The <a href="#">card</a>
            classes are suitable for both images and notes:</p>

        <div class="cell-row">

            <div class="cell cell-top card card-4" style="width:60%">
                <header class="clean-container round-top medium-blue">
                    <h2>A Car</h2>
                </header>
                <div class="clean-container">
                    <p>
                        A car is a wheeled, self-powered motor vehicle used for transportation.
                        Most definitions of the term specify that cars are designed to run primarily on roads,
                        to have seating for one to eight people, and to typically have four wheels.
                        <br><br>(Wikipedia)
                    </p>
                </div>
            </div>
            <div class="cell">&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div class="cell cell-top card card-4">
                <div class="clean-container round-top">
                    <h2>Amazing</h2>
                </div>
                <img src="documentation-clean_module/images/img_snowtops.jpg" alt="Car">
                <div class="clean-container">
                    <p>French Alps</p>
                </div>
            </div>
        </div>
        <div>
            <h3>Example</h3>
            <pre><code class="language-html">&lt;div class=&quot;panel yellow&quot;&gt;
    &lt;h3&gt;Warning!&lt;/h3&gt;
    &lt;p&gt;Yellow often indicates a warning that might need attention.&lt;/p&gt;
&lt;/div&gt;</code></pre>
        </div>


        <hr>
        <h2>Clean.CSS Tables</h2>
        <p><a href="#">Table</a> tags can handle all kinds of tables:</p>

        <table>
            <thead>
            <tr>
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
            <pre><code class="language-html">&lt;table&gt;</code></pre>
        </div>

        <hr>

        <h2>Clean.CSS Lists</h2>
        <p>The <a href="#">ul</a>
            tag can handle all kinds of lists:</p>

        <ul class="list-card card card-4">
            <li class="hover-light-grey">
                <span onclick="this.parentElement.style.display='none'"
                      class="close-button white xlarge float-right hover-red">&times;</span>
                <img src="documentation-clean_module/images/img_avatar2.png"
                     class="float-left circle margin-right profile" alt="Mike">
                <span class="large">Mike</span><br>
                <span>Web Designer</span>
            </li>
            <li class="hover-light-grey">
                <span onclick="$.closeElement(event)"
                      class="close-button white xlarge float-right hover-red">&times;</span>
                <img src="documentation-clean_module/images/img_avatar5.png"
                     class="float-left circle margin-right profile" alt="Jill">
                <span class="large">Jill</span><br>
                <span>Support</span>
            </li>
            <li class="hover-light-grey">
                <span onclick="$.closeElement(event)"
                      class="close-button white xlarge float-right hover-red">&times;</span>
                <img src="documentation-clean_module/images/img_avatar6.png"
                     class="float-left circle margin-right profile" alt="Jane">
                <span class="large">Jane</span><br>
                <span>Accountant</span>
            </li>
            <li class="hover-light-grey">
                <span onclick="$.closeElement(event)"
                      class="close-button white xlarge float-right hover-red">&times;</span>
                <img src="documentation-clean_module/images/img_avatar3.png"
                     class="float-left circle margin-right profile" alt="Jack">
                <span class="large">Jack</span><br>
                <span>Advisor</span>
            </li>
        </ul>
        <div>
            <h3>Example</h3>
            <pre><code class="language-html">&lt;ul class=&quot;border&quot;&gt;
    &lt;li&gt;&lt;h2&gt;Names&lt;/h2&gt;&lt;/li&gt;
    &lt;li&gt;Jill&lt;/li&gt;
    &lt;li&gt;Eve&lt;/li&gt;
    &lt;li&gt;Adam&lt;/li&gt;
&lt;/ul&gt;</code></pre>
        </div>

        <hr>

        <h2>Clean CSS Buttons</h2>
        <p>The <a href="#"><strong>button</strong> tag, and the <strong>button</strong></a>
            class provides buttons of all sizes and types.</p>
        <div class="section">
            <button class="ripple primary">Primary</button>
            <button class="ripple danger">Danger</button>
            <button class="ripple info">Information</button>
            <button class="ripple success">Success</button>
            <button class="ripple other">Button</button>
            <button class="ripple black-button">Button</button>
            <button class="ripple light-button">Button</button>
            <button disabled>Disabled</button>
        </div>
        <div class="section">
            <button class="alt primary">Cancel</button>
            <button class="alt light-grey round">Button</button>
            <button class="alt white border border-blue round">Button</button>
            <button class="alt white border border-red text-red hover-text-red hover-border-red round-large">Button
            </button>
            <button class="alt white border border-green round-xlarge">Button</button>
            <button class="black padding-large hover-red hover-border-red">Button</button>
        </div>

        <p>Button bar</p>

        <div class="bar three black">
            <button class="bar-item">One</button>
            <button class="bar-item">Two</button>
            <button class="bar-item">Three</button>
        </div>


        <p>Circular or square buttons:</p>

        <div class="bar" style="display: flex; gap: 10px">
            <button class="button-circle ripple danger">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </button>

            <button class="button-square ripple info">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>

            <button class="button-circle ripple success">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>

            <button class="button-circle ripple other">
                <i class="fa fa-minus" aria-hidden="true"></i>
            </button>

            <button class="button-circle ripple black-button">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </button>
        </div>

        <hr>

        <h2>Clean.CSS Tags, Labels, Badges, and Signs</h2>
        <p>The <a href="#">tag</a> and the
            <a href="#">badge</a>
            classes are capable of displaying all kinds of tags, labels, badges and signs:</p>
        <p><span class="badge circle dark-grey text-white">2</span>
            <span class="badge circle teal text-white">8</span>
            <span class="badge circle red text-white">A</span>
            <span class="badge circle orange text-white">B</span>
        </p>

        <p><span class="badge dark-grey">New</span>
            <span class="badge orange text-white">Warning</span>
            <span class="badge red">Danger</span>
            <span class="badge blue">Info</span>
        </p>

        <div class="row">
            <div class="half">
                <div class="badge round green">
                    <div class="badge round green">Falcon Ridge Parkway</div>
                </div>
                <div>
                    <div class="badge jumbo red">S</div>
                    <div class="badge jumbo black">A</div>
                    <div class="badge jumbo yellow">L</div>
                    <div class="badge jumbo black">E</div>
                </div>
            </div>

            <div class="half">
                <div class="badge xlarge padding-large round-large red center">DO NOT<br>
                    BREATHE<br>UNDER WATER
                </div>
            </div>
        </div>
        <hr>


        <h2>Clean.CSS Responsive</h2>
        <p>The <a href="#">Responsive Grid</a>
            classes provide responsiveness for all device types: PC, laptop, tablet, and mobile.</p>
        <!-- First row -->
        <div class="row-padding">

            <div class="col m4">
                <div class="col s6 green center">
                    <p>1/2</p>
                </div>
                <div class="col s6 dark-grey center text-light-grey">
                    <p>1/2</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col s4 green center">
                    <p>1/3</p>
                </div>
                <div class="col s4 dark-grey center text-light-grey">
                    <p>1/3</p>
                </div>
                <div class="col s4 dark-grey center text-light-grey">
                    <p>1/3</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col s4 dark-grey center">
                    <p>1/3</p>
                </div>
                <div class="col s8 green center text-light-grey">
                    <p>2/3</p>
                </div>
            </div>

        </div>

        <!-- Second row -->
        <div class="row-padding">

            <div class="col m4">
                <div class="col s3 green center">
                    <p>1/4</p>
                </div>
                <div class="col s3 dark-grey center text-light-grey">
                    <p>1/4</p>
                </div>
                <div class="col s3 dark-grey center text-light-grey">
                    <p>1/4</p>
                </div>
                <div class="col s3 dark-grey center text-light-grey">
                    <p>1/4</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col s6 green center">
                    <p>1/2</p>
                </div>
                <div class="col s3 dark-grey center">
                    <p>1/4</p>
                </div>
                <div class="col s3 dark-grey center text-light-grey">
                    <p>1/4</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col s8 green center">
                    <p>2/3</p>
                </div>
                <div class="col s4 dark-grey center text-light-grey">
                    <p>1/3</p>
                </div>
            </div>

        </div>

        <!-- Third row -->
        <div class="row-padding">

            <div class="col m4">
                <div class="col s12 green center text-light-grey">
                    <p>1/1</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col s3 dark-grey center">
                    <p>1/4</p>
                </div>
                <div class="col s3 dark-grey center">
                    <p>1/4</p>
                </div>
                <div class="col s6 green center">
                    <p>1/2</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col s3 dark-grey center">
                    <p>1/4</p>
                </div>
                <div class="col s6 green center">
                    <p>1/2</p>
                </div>
                <div class="col s3 dark-grey center">
                    <p>1/4</p>
                </div>
            </div>

        </div>

        <!-- Fourth row -->
        <div class="row-padding">

            <div class="col m4">
                <div class="col center dark-grey text-light-grey" style="width:50px">
                    <p>50px</p>
                </div>
                <div class="rest green center text-light-grey">
                    <p>rest</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col s3 dark-grey center">
                    <p>1/4</p>
                </div>
                <div class="rest green center text-light-grey">
                    <p>rest</p>
                </div>
            </div>

            <div class="col m4">
                <div class="col center dark-grey text-light-grey float-left" style="width:100px">
                    <p>100px</p>
                </div>
                <div class="col center dark-grey text-light-grey float-right" style="width:45px">
                    <p>45px</p>
                </div>
                <div class="rest green center text-light-grey">
                    <p>rest</p>
                </div>
            </div>

        </div>

        <!-- Grid Layout examples -->
        <div class="row-padding">

            <div class="col m4">

                <div class="col s6">
                    <div class="col s12 orange" style="width:92%;height:125px;margin-right:10px"></div>
                </div>

                <div class="col s6">
                    <div class="col s12 green" style="height:75px;margin-bottom:10px"></div>
                    <div class="col s6 green" style="height:40px;"></div>
                    <div class="col s6 dark-grey" style="height:40px"></div>
                </div>

            </div>

            <div class="col m4">

                <div class="col s3">
                    <div class="col s12 orange" style="width:85%;height:126px;margin-right:20px"></div>
                </div>

                <div class="col s6">
                    <div class="col s12 green" style="height:50px;margin-bottom:10px"></div>
                    <div class="col s6 green" style="height:31px;"></div>
                    <div class="col s6 dark-grey" style="height:31px;margin-bottom:10px"></div>

                    <div class="col s4 green" style="height:25px;"></div>
                    <div class="col s4 dark-grey" style="height:25px"></div>
                    <div class="col s4 green" style="height:25px"></div>
                </div>

                <div class="col s3">
                    <div class="col s12 orange" style="width:85%;height:126px;margin-left:10px"></div>
                </div>

            </div>

            <div class="col m4">

                <div class="col s12">
                    <div class="col s12 orange" style="height:36px;margin-bottom:10px"></div>
                </div>

                <div class="col s12">
                    <div class="col s12 green" style="height:30px;margin-bottom:10px"></div>
                    <div class="col s8 green" style="height:18px;"></div>
                    <div class="col s4 dark-grey" style="height:18px;margin-bottom:10px"></div>

                    <div class="col s3 green" style="height:15px;"></div>
                    <div class="col s3 dark-grey" style="height:15px"></div>
                    <div class="col s3 green" style="height:15px"></div>
                    <div class="col s3 dark-grey" style="height:15px"></div>
                </div>

            </div>

        </div>

        <p>Clean.CSS also supports a
            <a href="#">12 column mobile-first fluid grid</a>
            with small, medium, and large classes.</p>
        <hr>

        <h2>Clean.CSS Display</h2>
        <p>Display HTML elements in specific positions:</p>
        <div class="row-padding">

            <div class="half">
                <div class="relative green thumbnail">
                    <div class="topleft padding">Top Left</div>
                    <div class="topright padding">Top Right</div>
                    <div class="bottomleft padding">Bottom Left</div>
                    <div class="bottomright padding">Bottom Right</div>
                    <div class="left padding">Left</div>
                    <div class="right padding">Right</div>
                    <div class="middle padding">Middle</div>
                    <div class="topmiddle hide-small padding">Top Middle</div>
                    <div class="bottommiddle hide-small padding">Bottom Middle</div>
                </div>
            </div>
            <div class="half">
                <p class="margin-top hide-medium hide-large">
                <div class="relative green">
                    <img src="documentation-clean_module/images/img_lights.jpg" alt="Pants" class="thumbnail">
                    <div class="topleft padding">Top Left</div>
                    <div class="topright padding">Top Right</div>
                    <div class="bottomleft padding">Bottom Left</div>
                    <div class="bottomright padding">Bottom Right</div>
                    <div class="left padding">Left</div>
                    <div class="right padding">Right</div>
                    <div class="middle padding">Middle</div>
                    <div class="topmiddle hide-small padding">Top Middle</div>
                    <div class="bottommiddle hide-small padding">Bottom Middle</div>
                </div>
            </div>

        </div>
        <hr>

        <h2>Clean.CSS Modals</h2>
        <p>The <a href="#">clean-modal</a>
            class provides modal dialog in pure HTML:</p>

        <div x-data="modalData">
            <button @click="openModal()"
                    class="dark-grey hover-black padding-16">Click to Open Modal
            </button>

            <div x-show="modal" x-cloak class="clean-modal" :class="{'show': modal}">
                <div class="clean-modal-content small-content card card-4 animate-top relative">
                    <header class="clean-container teal">
                        <span @click="closeModal()" class="close-button large teal topright">&times;</span>
                        <h2>Header</h2>
                    </header>
                    <div class="clean-container">
                        <p>Some text. Some text. Some text.</p>
                        <p>Some text. Some text. Some text.</p>
                    </div>
                    <footer class="clean-container teal">
                        <p>Footer</p>
                    </footer>
                </div>
            </div>
        </div>


        <p>Modal Image:</p>

        <div x-data="modalData">
            <img class="hover-opacity thumbnail-third pointer" src="documentation-clean_module/images/img_nature.jpg"
                 alt="Nature"
                 @click="openModal()">

            <div x-show="modal" x-cloak class="clean-modal" :class="{'show': modal}" @click="closeModal()">
                <span class="close-button hover-red xxlarge topright">&times;</span>
                <div class="clean-modal-content medium-content card card-4 animate-zoom">
                    <img src="documentation-clean_module/images/img_nature_wide.jpg" alt="Nature">
                </div>
            </div>
        </div>

        <hr>

        <h2>Clean.CSS Progress Bars</h2>
        <p>Read more at <a href="#">Clean.CSS Progress Bars</a>

        <div class="dark-grey">
            <div class="clean-container green center" style="width:25%">25%</div>
        </div>
        <br>

        <div class="light-grey">
            <div class="clean-container red center" style="width:50%">50%</div>
        </div>
        <br>

        <div x-data="progressBarData" x-init="width = 2; speed = 25;">
            <div class="light-grey">
                <div class="clean-container green" style="width:5%; height: 20px" :style="{ width: (width + '%') }"
                     x-text="label">0
                </div>
            </div>
            <br>

            <button class="dark-grey hover-black hover-border-black" @click="triggerMove()">
                Click Me
            </button>
        </div>

        <hr>

        <h2>Clean.CSS Dropdowns</h2>
        <p>The <a href="#"><strong>dropdown</strong></a>
            classes provide dropdowns:</p>
        <div class="row">
            <div class="col s6">
                <div x-data="dropdownData" class="dropdown-hover" @click.outside="hideDropdown">
                    <button @mouseover="toggleDropdown" class="dark-grey hover-black">
                        Hover Me! <i class="fa fa-caret-down"></i>
                    </button>
                    <div x-show="openDropdown" class="dropdown-content bar-block border">
                        <a class="bar-item" href="javascript:void(0)">Link 1</a>
                        <a class="bar-item" href="javascript:void(0)">Link 2</a>
                        <a class="bar-item" href="javascript:void(0)">Link 3</a>
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div x-data="dropdownData" class="dropdown-click" @click.outside="hideDropdown">
                    <button @click="toggleDropdown" class="dark-grey hover-black">
                        Click Me! <i class="fa fa-caret-down"></i>
                    </button>
                    <div x-show="openDropdown" id="dropdownOne" class="dropdown-content bar-block card card-4">
                        <a class="bar-item" href="javascript:void(0)">Link 1</a>
                        <a class="bar-item" href="javascript:void(0)">Link 2</a>
                        <a class="bar-item" href="javascript:void(0)">Link 3</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h2>Clean.CSS Accordions</h2>
        <p>Read more at <a href="#">Clean.CSS Accordions</a></p>

        <div x-data="accordionData">
            <button @click="toggleAccordion('accordionOne')"
                    class="hover-dark-grey light-grey block left-align">Open
                Section 1
            </button>
            <div id="accordionOne" class="hide accordion-item">
                <div class="clean-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                </div>
            </div>
            <button @click="toggleAccordion('accordionTwo')"
                    class="hover-dark-grey light-grey block left-align">Open
                Section 2
            </button>
            <div id="accordionTwo" class="hide bar-block accordion-item">
                <a class="bar-item" href="javascript:void(0)">Link 1</a>
                <a class="bar-item" href="javascript:void(0)">Link 2</a>
                <a class="bar-item" href="javascript:void(0)">Link 3</a>
            </div>
            <button @click="toggleAccordion('accordionThree')"
                    class="hover-dark-grey light-grey block left-align">Open
                Section 3
            </button>
            <div id="accordionThree" class="hide black accordion-item">
                <div class="clean-container">
                    <p>Accordion with Images:</p>
                    <img src="documentation-clean_module/images/img_snowtops.jpg"
                         class="animate-zoom thumbnail-third" alt="French Alps">
                    <p>French Alps</p>
                </div>
            </div>
        </div>
        <hr>

        <h2>Clean.CSS Tabs</h2>
        <p><a href="#">Tabs</a> are perfect for single page web applications, or for
            web
            pages capable of displaying different subjects.</p>
        <div x-data="tabsData" class="border round">
            <div class="bar light-grey">
                <a href="javascript:void(0)" class="bar-item tabActivateButton"
                   @click="switchTab('London')" :class="{'red': tabId === 'London'}">London</a>
                <a href="javascript:void(0)" class="bar-item tabActivateButton"
                   @click="switchTab('Paris')" :class="{'red': tabId === 'Paris'}">Paris</a>
                <a href="javascript:void(0)" class="bar-item tabActivateButton"
                   @click="switchTab('Tokyo')" :class="{'red': tabId === 'Tokyo'}">Tokyo</a>
            </div>

            <div id="London" class="clean-container tabs animate-opacity red">
                <h2>London</h2>
                <p>London is the capital of England.</p>
                <p>It is the most populous city in the United Kingdom,
                    with a metropolitan area of over 9 million inhabitants.</p>
            </div>

            <div id="Paris" class="clean-container tabs animate-opacity red">
                <h2>Paris</h2>
                <p>Paris is the capital of France.</p>
                <p>The Paris area is one of the largest population centers in Europe,
                    with more than 12 million inhabitants.</p>
            </div>

            <div id="Tokyo" class="clean-container tabs animate-opacity red">
                <h2>Tokyo</h2>
                <p>Tokyo is the capital of Japan.</p>
                <p>It is the center of the Greater Tokyo Area,
                    and the most populous metropolitan area in the world.</p>
            </div>
        </div>

        <br>

        <p>Tabbed Image Gallery (Click on one of the pictures):</p>

        <div x-data="tabbedImagesData">
            <div class="row-padding margin-top">
                <div class="col s3 clean-container">
                    <a href="javascript:void(0)" class="hover-opacity tabbed-image-gallery-button"
                       @click="openTabbedImage('Nature');">
                        <img src="documentation-clean_module/images/img_nature.jpg" alt="Nature">
                    </a>
                </div>
                <div class="col s3 clean-container">
                    <a href="javascript:void(0)" class="hover-opacity tabbed-image-gallery-button"
                       @click="openTabbedImage('Snow');">
                        <img src="documentation-clean_module/images/img_snowtops.jpg" alt="Fjords">
                    </a>
                </div>
                <div class="col s3 clean-container">
                    <a href="javascript:void(0)" class="hover-opacity tabbed-image-gallery-button"
                       @click="openTabbedImage('Mountains');">
                        <img src="documentation-clean_module/images/img_mountains.jpg" alt="Mountains">
                    </a>
                </div>
                <div class="col s3 clean-container">
                    <a href="javascript:void(0)" class="hover-opacity tabbed-image-gallery-button"
                       @click="openTabbedImage('Lights');">
                        <img src="documentation-clean_module/images/img_lights.jpg" alt="Lights">
                    </a>
                </div>
            </div>
            <br>
            <div id="Nature" class="picture relative tabbed-image-gallery-item">
                <img src="documentation-clean_module/images/img_nature_wide.jpg" alt="Nature">
                <span @click="hide(event)"
                      class="topright close-button xlarge transparent text-white">&times;</span>
                <div class="bottomleft clean-container padding text-white">Nature</div>
            </div>

            <div id="Snow" class="picture relative tabbed-image-gallery-item">
                <img src="documentation-clean_module/images/img_snow_wide.jpg" alt="Snow">
                <span @click="hide(event)"
                      class="topright close-button xlarge transparent text-white">&times;</span>
                <div class="bottomleft clean-container padding text-white">Snow</div>
            </div>

            <div id="Mountains" class="picture relative tabbed-image-gallery-item">
                <img src="documentation-clean_module/images/img_mountains_wide.jpg" alt="Mountains">
                <span @click="hide(event)"
                      class="topright close-button xlarge transparent">&times;</span>
                <div class="bottomleft clean-container padding text-white">Mountains</div>
            </div>

            <div id="Lights" class="picture relative tabbed-image-gallery-item">
                <img src="documentation-clean_module/images/img_lights_wide.jpg" alt="Lights">
                <span @click="hide(event)"
                      class="topright close-button xlarge transparent text-white">&times;</span>
                <div class="bottomleft clean-container padding text-white">Northern Lights</div>
            </div>
        </div>

        <hr>

        <h2>Clean.CSS Navigation</h2>
        <p>The <a href="#">bar</a> class can be used to create a navigation bar:
        </p>

        <div class="bar black">
            <a href="javascript:void(0)" class="bar-item">Home</a>
            <a href="javascript:void(0)" class="bar-item">Link 1</a>
            <a href="javascript:void(0)" class="bar-item">Link 2</a>
            <a href="javascript:void(0)" class="bar-item hide-small">Link 3</a>
            <a href="javascript:void(0)" class="bar-item float-right"><i class="fa fa-search"></i></a>
        </div>

        <p>Navigation bar with input:</p>
        <div class="bar light-grey border">
            <a href="javascript:void(0)" class="bar-item green mobile">Home</a>
            <a href="javascript:void(0)" class="bar-item mobile">Link 1</a>
            <a href="javascript:void(0)" class="bar-item mobile">Link 2</a>
            <input type="text" class="bar-item white mobile" placeholder="Search..">
            <a href="javascript:void(0)" class="bar-item black mobile">Go</a>
        </div>

        <p>Navigation bar with dropdown:</p>
        <div class="bar light-grey">
            <a href="javascript:void(0)" class="bar-item mobile">Home</a>
            <a href="javascript:void(0)" class="bar-item mobile">Link 1</a>
            <div class="dropdown-hover mobile">
                <button>Dropdown <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content bar-block card card-4">
                    <a class="bar-item text-black" href="javascript:void(0)">Link 1</a>
                    <a class="bar-item text-black" href="javascript:void(0)">Link 2</a>
                    <a class="bar-item text-black" href="javascript:void(0)">Link 3</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="bar-item float-right mobile"><i
                        class="fa fa-search"></i></a>
        </div>
        <div class="hide-small">
            <p>Customized bars:</p>


            <div class="bar dark-grey">
                <a class="bar-item mobile green third" href="javascript:void(0)">Home</a>
                <a class="bar-item mobile third" href="javascript:void(0)">Link 1</a>
                <a class="bar-item mobile third" href="javascript:void(0)">Link 2</a>
            </div>

            <div class="bar black">
                <a class="bar-item hover-black padding-16 text-grey hover-text-white"
                   href="javascript:void(0)">Home</a>
                <a class="bar-item hover-black padding-16 bottombar border-red"
                   href="javascript:void(0)">Link 1</a>
                <a class="bar-item hover-black padding-16 text-grey hover-text-white"
                   href="javascript:void(0)">Link 2</a>
                <a class="bar-item hover-black padding-16 text-grey hover-text-white"
                   href="javascript:void(0)">Link 3</a>
                <a href="javascript:void(0)"
                   class="bar-item float-right padding-16 hover-black text-grey hover-text-white"><i
                            class="fa fa-search"></i></a>
            </div>
        </div>
        <hr>

        <h2>Clean.CSS Pagination</h2>
        <p>Clean.CSS provides simple ways for <a href="#">page pagination</a>.</p>

        <div class="bar margin-top margin-bottom">
            <a class="bar-item button" href="javascript:void(0)">&laquo;</a>
            <a class="bar-item button black" href="javascript:void(0)">1</a>
            <a class="bar-item button" href="javascript:void(0)">2</a>
            <a class="bar-item button" href="javascript:void(0)">3</a>
            <a class="bar-item button" href="javascript:void(0)">4</a>
            <a class="bar-item button" href="javascript:void(0)">5</a>
            <a class="bar-item button" href="javascript:void(0)">&raquo;</a>
        </div>

        <div class="bar border round margin-top margin-bottom">
            <a href="javascript:void(0)" class="button link-button">&#10094; Previous</a>
            <a href="javascript:void(0)" class="button float-right link-button">Next &#10095;</a>
        </div>

        <div class="center">
            <div class="bar margin-top margin-bottom">
                <a href="javascript:void(0)" class="button link-button">&#10094;</a>
                <a href="javascript:void(0)" class="button link-button">&#10095;</a>
            </div>
        </div>

        <hr>

        <h2>Slideshows</h2>
        <p>Clean.CSS provide <a href="#">slideshows</a> for cycling through images or
            other
            content:</p>

        <div x-data="sliderData" x-init="slideItemClass = 'slide-item'; slideDotsClass = 'slide-dots';"
             class="clean-content relative">
            <div class="relative slide-item">
                <img src="documentation-clean_module/images/img_nature_wide.jpg" alt="Beautiful Nature">
                <div class="topleft padding text-white small">
                    1 / 3
                </div>
                <div class="topright text-white padding hide-small">
                    Beautiful Nature
                </div>
            </div>
            <div class="relative slide-item">
                <img src="documentation-clean_module/images/img_snow_wide.jpg" alt="French Alps">
                <div class="topleft text-white padding small">
                    2 / 3
                </div>
                <div class="topright text-white padding hide-small">
                    French Alps
                </div>
            </div>
            <div class="relative slide-item">
                <img src="documentation-clean_module/images/img_mountains_wide.jpg" alt="Mountains">
                <div class="topleft text-white padding small">
                    3 / 3
                </div>
                <div class="topright text-black padding hide-small">
                    Mountains
                </div>
            </div>
            <div class="slider-nav center clean-container section large text-white bottomleft">
                <div class="float-left hover-text-khaki large pointer" @click="switchSlide(-1)">&#10094;</div>
                <div class="float-right hover-text-khaki large pointer" @click="switchSlide(1)">&#10095;</div>
                <div class="margin-top text-center">
                    <span class="badge slide-dots border hover-white" @click="currentSlide(1)"></span>
                    <span class="badge slide-dots border hover-white" @click="currentSlide(2)"></span>
                    <span class="badge slide-dots border hover-white" @click="currentSlide(3)"></span>
                </div>

            </div>
        </div>

        <hr>

        <h2>Lightbox</h2>
        <p>Combine <a href="#">Modals</a> and <a href="#">Slideshows</a> to create a
            lightbox
            (modal image gallery):</p>
        <div x-data="lightboxData">
            <div x-show="openLighbox" class="gallery-modal black" :class="{'show': openLighbox }">
                <span class="text-white xxlarge hover-text-grey clean-container topright pointer"
                      title="Close Lightbox" @click="closeLightbox()">&times;</span>
                <div class="clean-modal-content big-content">

                    <div class="clean-content">
                        <img class="lightbox-item" src="documentation-clean_module/images/img_nature_wide.jpg"
                             alt="Nature">
                        <img class="lightbox-item" src="documentation-clean_module/images/img_snow_wide.jpg" alt="Snow">
                        <img class="lightbox-item" src="documentation-clean_module/images/img_mountains_wide.jpg"
                             alt="Mountains">
                        <div class="row black center">
                            <div class="clean-container relative">
                                <p id="lightbox-caption-id" class="text-center"></p>
                                <span class="middle hover-text-grey large pointer" style="left:2%"
                                      @click="stepLightbox(-1)" title="Previous image">&#10094;</span>
                                <span class="middle hover-text-grey large pointer" style="left:98%"
                                      @click="stepLightbox(1)" title="Next image">&#10095;</span>
                            </div>

                            <div class="col s4">
                                <img class="lightbox-dots opacity hover-opacity-off pointer"
                                     src="documentation-clean_module/images/img_nature_wide.jpg"
                                     @click="currentLightbox(1)" alt="Nature and sunrise">
                            </div>
                            <div class="col s4">
                                <img class="lightbox-dots opacity hover-opacity-off pointer"
                                     src="documentation-clean_module/images/img_snow_wide.jpg"
                                     @click="currentLightbox(2)" alt="French Alps">
                            </div>
                            <div class="col s4">
                                <img class="lightbox-dots opacity hover-opacity-off pointer"
                                     src="documentation-clean_module/images/img_mountains_wide.jpg"
                                     @click="currentLightbox(3)" alt="Mountains and fjords">
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- End clean-content -->

                </div> <!-- End modal content -->
            </div> <!-- End modal -->

            <div class="row-padding">
                <div class="col s4">
                    <img src="documentation-clean_module/images/img_nature_wide.jpg"
                         @click="openLightbox();currentLightbox(1)" class="hover-shadow pointer" alt="Nature">
                </div>
                <div class="col s4">
                    <img src="documentation-clean_module/images/img_snow_wide.jpg"
                         @click="openLightbox();currentLightbox(2)" class="hover-shadow pointer" alt="Snow">
                </div>
                <div class="col s4">
                    <img src="documentation-clean_module/images/img_mountains_wide.jpg"
                         @click="openLightbox();currentLightbox(3)" class="hover-shadow pointer" alt="Mountains">
                </div>
            </div>
        </div>

        <hr>

        <h2>Clean.CSS Animations</h2>
        <p>The <a href="#">animate</a>
            classes provide an easy way to slide and fade in elements:</p>

        <div x-data="animateData">
            <div class="center">
                <button class="green hover-dark-green hover-border-dark-green" @click="animate('top')">Top
                </button>
                <button class="green hover-dark-green hover-border-dark-green" @click="animate('bottom')">
                    Bottom
                </button>
                <button class="green hover-dark-green hover-border-dark-green" @click="animate('left')">Left
                </button>
                <button class="green hover-dark-green hover-border-dark-green" @click="animate('right')">Right
                </button>
                <button class="green hover-dark-green hover-border-dark-green" @click="animate('fade')">Fade In
                </button>
                <button class="green hover-dark-green hover-border-dark-green" @click="animate('zoom')">Zoom
                </button>
                <button class="green hover-dark-green hover-border-dark-green" @click="animate('spin')">Spin
                </button>
            </div>
            <div class="center">
                <div x-show="target === 'top'" class="panel animate animate-top">Animation is Fun!</div>
                <div x-show="target === 'bottom'" class="panel animate animate-bottom">Animation is Fun!</div>
                <div x-show="target === 'left'" class="panel animate animate-left">Animation is Fun!</div>
                <div x-show="target === 'right'" class="panel animate animate-right">Animation is Fun!</div>
                <div x-show="target === 'fade'" class="panel animate animate-opacity">Animation is Fun!</div>
                <div x-show="target === 'zoom'" class="panel animate animate-zoom">Animation is Fun!</div>
                <div x-show="target === 'spin'" class="panel animate spin">Animation is Fun!</div>
                <div x-show="target === 'normal'" class="panel animate ">Animation is Fun!</div>
            </div>
        </div>

        <hr>

        <h2>Clean.CSS Images</h2>
        <p>Styling <a href="#">images</a> in Clean.CSS is easy:</p>

        <div class="row-padding">
            <div class="col m3 s4">
                <img src="documentation-clean_module/images/img_lights.jpg" class="round testsm"
                     alt="Northern Lights">
            </div>
            <div class="col m3 s4">
                <img src="documentation-clean_module/images/img_forest.jpg" class="circle testsm" alt="Forest">
            </div>
            <div class="col m3 s4">
                <img src="documentation-clean_module/images/img_mountains.jpg" class="testsm hover-opacity border"
                     alt="Mountains">
            </div>
            <div class="col m3 hide-small">
                <div class="relative">
                    <img src="documentation-clean_module/images/img_nature.jpg" alt="Nature"
                         class="card card-4 testsm">
                    <div class="bottomleft text-white clean-container padding">Nature
                    </div>
                </div>
            </div>

        </div>
        <div style="clear:both;margin-bottom:28px;"></div>

        <hr>

        <h2>Clean.CSS Effects</h2>
        <p>Add special <a href="#">effects</a> to any element:</p>
        <div class="row-padding center">

            <div class="col m3 hide-small">
                <img src="documentation-clean_module/images/img_workshop.jpg" alt="Workshop">
                <div class="red clean-container">
                    <p>Normal</p>
                </div>
            </div>

            <div class="col m3 s4 opacity">
                <img src="documentation-clean_module/images/img_workshop.jpg" alt="Workshop">
                <div class="red clean-container">
                    <p>Opacity</p>
                </div>
            </div>

            <div class="col m3 s4 grayscale">
                <img src="documentation-clean_module/images/img_workshop.jpg" alt="Workshop">
                <div class="red clean-container">
                    <p>Grayscale</p>
                </div>
            </div>

            <div class="col m3 s4 sepia">
                <img src="documentation-clean_module/images/img_workshop.jpg" alt="Workshop">
                <div class="red clean-container">
                    <p>Sepia</p>
                </div>
            </div>

        </div>
        <hr>

        <h2>Clean.CSS Input Forms</h2>
        <p>The <a href="#">input</a> tags are for input forms:</p>

        <div class="row-padding margin-bottom">
            <div class="third">
                <label>One</label>
                <input type="text" placeholder="One">
            </div>
            <div class="third">
                <label>Two</label>
                <input type="text" placeholder="Two">
            </div>
            <div class="third">
                <label>Three</label>
                <input type="text" placeholder="Three">
            </div>
        </div>

        <input class="animate-input" type="text" style="width:30%;" placeholder="Click on me!">

        <div class="row-padding margin-top">

            <div class="half">
                <div class="card card-4 margin-top-32">
                    <div class="clean-container blue round-top">
                        <h3>Input Form</h3>
                    </div>
                    <form class="clean-container padding-bottom-32">
                        <label>Name</label>
                        <input type="text" disabled>

                        <label>Email</label>
                        <input type="email" required>

                        <label>Subject</label>
                        <textarea rows="5" name="message"></textarea>

                        <label>What do you need from the grocery's?</label>
                        <input id="milk" type="checkbox" checked="checked">Milk
                        <input id="sugar" type="checkbox"> Sugar
                        <input id="lemon" type="checkbox" disabled> Lemon (Disabled)
                    </form>
                </div>
            </div>

            <div class="half">
                <div class="card card-4 margin-top-32">
                    <div class="clean-container red round-top">
                        <h3>Input Form</h3>
                    </div>
                    <form class="clean-container padding-bottom-32">
                        <label>Name</label>
                        <input type="text" required>

                        <label>Email </label>
                        <input type="email" required>

                        <label>Subject </label>
                        <textarea name="message" rows="5"></textarea>

                        <label>Sex</label>
                        <input type="radio" name="gender" value="male" checked>Male
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="" disabled> Don't know (Disabled)

                    </form>
                </div>
            </div>
        </div>
        <hr>

        <h2>Clean.CSS Filters</h2>
        <p>Use <a href="#">Clean.CSS Filters</a> to search for a specific element inside a list, table, dropdown,
            etc:</p>

        <div x-data="filterData" x-init="dataType = 'table'; sourceId = 'filter-table';">
            <input type="text" placeholder="Search for names.." x-model="filterTerm"
                   @keyup="filter()">

            <table id="filter-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>

        <div x-data="filterData" x-init="dataType = 'list'; sourceId = 'filter-list';">
            <input type="text" placeholder="Search for fruits.." x-model="filterTerm" @keyup="filter()">
            <ul id="filter-list">
                <li>Apple</li>
                <li>Orange</li>
                <li>Banana</li>
                <li>Peach</li>
                <li>Melon</li>
                <li>Cherry</li>
            </ul>
        </div>

        <hr>

        <h2>Clean.CSS Tooltips</h2>
        <p>The <strong><a href="#">tooltip</a></strong>
            class can display all kinds of tooltips:</p>

        <p class="tooltip">Hover over this text!
            <i class="fa fa-question-circle pointer" aria-hidden="true"></i>
            <span class="badge black">Tooltip content</span></p>
        <p class="tooltip">Hover over this text!
            <i class="fa fa-question-circle pointer" aria-hidden="true"></i>
            <span class="badge black animate-opacity round-large">Tooltip content</span></p>
        <hr>

        <h2>Color Themes</h2>
        <p>Color themes can easily be added to any web application:</p>

        <div class="row-padding">
            <div class="half">
                <div class="card text-dark-gray white">
                    <div class="clean-container indigo round-top">
                        <h3>Theme Indigo</h3>
                    </div>
                    <div class="clean-container text-indigo"><h4>Movies 2014</h4></div>
                    <ul class="card-list">
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

                    <div class="clean-container indigo xlarge round-bottom">&laquo;<span
                                class="float-right">&raquo;</span></div>
                </div>
            </div>

            <div class="half">
                <div class="card text-dark-gray white">
                    <div class="clean-container teal round-top">
                        <h3>Theme Teal</h3>
                    </div>
                    <div class="clean-container text-teal">
                        <h4>Movies 2014</h4>
                    </div>
                    <div class="clean-container">
                        <ul class="card-list">
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
                    </div>
                    <div class="clean-container teal xlarge round-bottom pointer">&laquo;<span
                                class="float-right">&raquo;</span></div>
                </div>
            </div>
        </div>

        <p>Color themes are a perfect match for mobile applications.</p>

    </main>


</div>


