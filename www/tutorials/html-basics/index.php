<?php
$title = 'HTML basics';
$pagePath = '/tutorials/html-basics';

include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/tutorials.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <script><!--
    $('#allPages').ready(function(){
        loadTutorial(9);
    });
    --></script>
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader(null, $pagePath); ?>    

<?php
$pages = array(
    'Hello, world!',
    'Basic tags',
    'Paragraphs',
    'Headings',
    'Lists',
    'Links and attributes',
    'Images',
    'Comments',
    'Review exercise'
);

echo makeTutorialFeature($title, $pages);
?>

<div id="content" class="pageBox">
    <div class="loading">
        <?php echo makeLoadingDiv(); ?>
    </div>

    <div id="currentPage"></div>
    
    <div class="pageButtons"></div>
    
    <div id="allPages">
        <div class="page" id="page-1">
            <h2>Hello, world!</h2>
            <p>Welcome to the world of web development! First, let's get 
            acquainted with how this website works. Type "Hello, world!" into
            the left hand side of the box below:</p>
            <?php echo makeWhiteboard('html-basics_hello-world',
                true, true, 2, 2, '', '', 0); ?>
                
            <p>Throughout our tutorials, we'll use code whiteboards like the one
            above to demonstrate examples of HTML and CSS code. Any code you
            type in the HTML tab on the left will be reflected automatically in
            the preview area on the right.</p>
            
            <p>Now, let's get started. Click "next page" to move on.</p>
        </div>
        <div class="page" id="page-2">
            <h2>Basic tags</h2>
            <p>HTML is a scripting language that you use to describe what's in a
            webpage, while CSS is a language that you use to describe the
            page's appearance. Since we're learning HTML now, we're not 
            concerned with how a page looks. Instead, we just want to define
            the page's content and structure.</p>
            
            <p>In HTML, we can give things special meanings by surrounding them
            with <span class="term">tags</span>. Here's an example of the
            <span class="code term">em</span> (emphasis) tag:</p>
            <p class="code">
            "This is no ordinary machine... it's &lt;em&gt;special&lt;/em&gt;!"
            </p>
            <?php echo makeWhiteboard('html-basics-basic-tags-em',
                true, true, 2, 2,
'', '', 0); ?>
                
            <p>Here's another example with the
            <span class="code term">strong</span> (strong emphasis) tag:</p>
            <p class="code">
            "This is no ordinary machine... it's &lt;strong&gt;special&lt;/strong&gt;!";
            </p>
            <?php echo makeWhiteboard('html-basics-basic-tags-strong',
                true, true, 2, 2, 
'', '', 0); ?>
                
            <p>Get the pattern? Tags are like quotation marks. The left tag
            looks like <span class="code">&lt;tag&gt;</span> and the right tag
            looks like <span class="code">&lt;/tag&gt;</span>. As you can see
            from the above examples, "emphasis" means italicize, and "strong
            emphasis" means bold. These are just the default styles, though.
            With CSS, we'll be able to change the meanings of
            <span class="code">em</span> and <span class="code">strong</span>
            </p>
            
            <p>Note also that you can combine tags to have them both apply at
            the same time:</p>
            <p class="code">
            "This is no ordinary machine... it's &lt;strong&gt;&lt;em&gt;special&lt;/em&gt;&lt;/strong&gt;!"
            </p>
            <?php echo makeWhiteboard('html-basics-basic-tags-combined',
                true, true, 2, 2, 
'',
                '', 0); ?>
            <p>In this case, we put the <span class="code">strong</span> tag
            before the <span class="code">em</span> tag. The order in which you
            put tags can sometimes make a difference in the result. Does it in
            the above example? (Try it!)</p>
            
            <p>Finally, a bit of terminology. <span class="term">Tags</span>
            refer to code like <span class="code">&lt;strong&gt;</span> and
            <span class="code">&lt;em&gt;</span>. A set of opening and closing
            tags, together with the content inside them, is called an <span
            class="term">element</span>. So for example, this whole thing is
            an element:
            <span class="code">&lt;strong&gt;Some text&lt;/strong&gt;</span>.
            </p>
            
            <h3>Exercise: basic tags</h3>
            <p>Try to italicize all the verbs and bold all the nouns in the
            sentence below:</p>
            <?php echo makeWhiteboard('html-basics-basic-tags-ex1',
                true, true, 3, 3,
'The quick brown fox jumped over the lazy dog.',
                '', 0); ?>
            <?php echo makeSolution(makeWhiteboard(
                'html-basics_basic-tags-ex1sol', false, true, 3, 3,
'The quick brown <strong>fox</strong> <em>jumped</em> over the lazy\
 <strong>dog</strong>.', '', 0)); ?>
                
            <p>Click "next page" to move on.</p>
        </div>
        <div class="page" id="page-3">
            <h2>Paragraphs</h2>
            <p>Notice that if you hit "enter" to make a new line in HTML code,
            it doesn't make new lines in the result. Try copying and pasting
            in the following poem stanza:</p>
            <blockquote>Whose woods these are I think I know.<br />
His house is in the village, though;<br />
He will not see me stopping here<br />
To watch his woods fill up with snow.
            </blockquote>
            <?php echo makeWhiteboard('html-basics_paragraphs-noWhitespace',
                true, true, 4, 4, '', '', 0); ?>
            
            <p>You can also try to add two spaces in between words instead of
            just one. Notice that nothing changes on the right hand side. When
            we see this kind of behavior, we say that HTML doesn't care about
            <em>whitespace</em>. You can put spaces, tabs, or hit enter, and it
            won't make a difference.</p>
            
            <p>One way we can change this is to add a
            <span class="code term">p</span> 
            (paragraph) tag around each line, like so:</p>
            <?php echo makeWhiteboard('html-basics_paragraphs-pTag',
                true, true, 9, 9, 
'<p>Whose woods these are I think I know.</p>\n\
<p>His house is in the village, though;</p>\n\
<p>He will not see me stopping here</p>\n\
<p>To watch his woods fill up with snow.</p>', '', 0); ?>
                
            <p>When we do that, we're saying that each of those lines is a 
            "paragraph." Our browsers have a default style, which is to put
            space around paragraphs. Like <span class="code">strong</span> and
            <span class="code">em</span>, we
            can change this later, using CSS.</p>
            
            <p>But, properly speaking, lines of poems aren't paragraphs. They're
            just lines. Another way we can format the stanza is to just use the
            <span class="code term">br</span> (line break) tag:
            <?php echo makeWhiteboard('html-basics_paragraphs-brTag',
                true, true, 5, 5, 
'Whose woods these are I think I know.<br />\n\
His house is in the village, though;<br />\n\
He will not see me stopping here<br />\n\
To watch his woods fill up with snow.', '', 0); ?>
            
            <p>One thing that's different about the
            <span class="code term">br</span> tag is that
            there's no &lt;/br&gt; tag. That's because it doesn't really make
            sense to define where a line break "ends," it's either there or it
            isn't. So, we format it like <span class="code">&lt;br /&gt;</span>
            (adding in an extra slash). We'll be sure to let you know whenever
            we encounter other tags like this.</p>
            
            <h3>Exercise: separating lines and paragraphs</h3>
            <p>The full text of the poem is below. Separate lines in each stanza
            using the <span class="code term">br</span> tag, but separate
            stanzas using the <span class="code term">p</span> tag. Note that
            you can press the Tab key while editing code to insert tabs.</p>
            
            <?php echo makeWhiteboard('html-basics_paragraphs-ex1',
                true, true, 24, 24,
'\n\
  Whose woods these are I think I know.\n\
  His house is in the village, though;\n\
  He will not see me stopping here\n\
  To watch his woods fill up with snow.\n\
\n\
\n\
  My little horse must think it queer\n\
  To stop without a farmhouse near\n\
  Between the woods and frozen lake\n\
  The darkest evening of the year.\n\
\n\
\n\
  He gives his harness bells a shake\n\
  To ask if there\\\'s some mistake.\n\
  The only other sound\\\'s the sweep\n\
  Of easy wind and downy flake.\n\
\n\
\n\
  The woods are lovely, dark and deep,\n\
  But I have promises to keep,\n\
  And miles to go before I sleep,\n\
  And miles to go before I sleep.\n\
', '', 0); ?>

            <?php echo makeSolution(makeWhiteboard(
                'html-basics_paragraphs-ex1sol', false, true, 24, 24, 
'<p>\n\
  Whose woods these are I think I know.<br />\n\
  His house is in the village, though;<br />\n\
  He will not see me stopping here<br />\n\
  To watch his woods fill up with snow.\n\
</p>\n\
<p>\n\
  My little horse must think it queer<br />\n\
  To stop without a farmhouse near<br />\n\
  Between the woods and frozen lake<br />\n\
  The darkest evening of the year.\n\
</p>\n\
<p>\n\
  He gives his harness bells a shake<br />\n\
  To ask if there\\\'s some mistake.<br />\n\
  The only other sound\\\'s the sweep<br />\n\
  Of easy wind and downy flake.\n\
</p>\n\
<p>\n\
  The woods are lovely, dark and deep,<br />\n\
  But I have promises to keep,<br />\n\
  And miles to go before I sleep,<br />\n\
  And miles to go before I sleep.\n\
</p>', '', 0)); ?>

        <p>Click "next page" to continue.</p>
        </div>
        <div class="page" id="page-4">
            <h2>Headings</h2>
            <p>We can make titles and sub-titles on our page using headings. We
            make a giant heading using the <span class="code term">h1</span>
            (heading 1) tag:</p>
            <?php echo makeWhiteboard('html-basics_headings-h1',
                true, true, 6, 6, 
'<h1>Welcome to my webpage</h1>\n\
<p>Once I\\\'m done making it, it will be awesome.</p>', '', 0); ?>

            <p>There are 6 headings you can use
            (<span class="code term">h1</span> through
            <span class="code term">h6</span>), each smaller than the next. As
            usual, we can change their styles later using CSS, but for now
            let's see what the default styles are:</p>
            <?php echo makeWhiteboard('html-basics_headings-h1toh7',
                true, true, 17, 17, 
'<h1>Heading 1</h1>\n\
<h2>Heading 2</h2>\n\
<h3>Heading 3</h3>\n\
<h4>Heading 4</h4>\n\
<h5>Heading 5</h5>\n\
<h6>Heading 6</h6>', '', 0); ?>

            <p>Note that headings don't just make the words bigger, they also
            put them on their own line:</p>
            <?php echo makeWhiteboard('html-basics_headings-h1newline',
                true, true, 7, 7, 
                'Nothing makes me <h1>happier</h1> than a walk in the rain.',
                '', 0); ?>
                
            <p>Using headings, you can think of your page like an outline. You
            use heading 1 for the biggest idea on the page. Then, you use
            heading 2 to mark the main sub-ideas under heading 1. And heading 3
            are the sub-ideas under heading 2, and so on.
                
            <h3>Exercise: mimicking headings</h3>
            <p>Try to recreate the example below:</p>
            <?php echo makeWhiteboard('html-basics_headings-ex1goal',
                false, false, 22, 22,
'<h1>Types of science</h1>\n\n\
<h2>Natural</h2>\n\
<p>Refers to a naturalistic approach to the study of the universe, which is understood as obeying rules or laws of natural origin.</p>\n\n\
<h3>Physics</h3>\n\
<p>A natural science that involves the study of matter and its motion through spacetime, as well as all related concepts.</p>\n\n\
<h3>Chemistry</h3>\n\
<p>The science of matter and the changes it undergoes.</p>\n\n\
<h2>Social</h2>\n\n\
<h2>Formal</h2>', '', 0); ?>
                
            <?php echo makeWhiteboard('html-basics_headings-ex1',
                true, true, 25, 25,
'Types of science\n\n\
Natural\n\
<p>Refers to a naturalistic approach to the study of the universe, which is understood as obeying rules or laws of natural origin.</p>\n\n\
Physics\n\
<p>A natural science that involves the study of matter and its motion through spacetime, as well as all related concepts.</p>\n\n\
Chemistry\n\
<p>The science of matter and the changes it undergoes.</p>\n\n\
Social\n\n\
Formal', '', 0); ?>

            <?php echo makeSolution(makeWhiteboard(
                'html-basics_headings-ex1sol', false, true, 25, 25, 
'<h1>Types of science</h1>\n\n\
<h2>Natural</h2>\n\
<p>Refers to a naturalistic approach to the study of the universe, which is understood as obeying rules or laws of natural origin.</p>\n\n\
<h3>Physics</h3>\n\
<p>A natural science that involves the study of matter and its motion through spacetime, as well as all related concepts.</p>\n\n\
<h3>Chemistry</h3>\n\
<p>The science of matter and the changes it undergoes.</p>\n\n\
<h2>Social</h2>\n\n\
<h2>Formal</h2>', '', 0)); ?>

            <p>Click "next page" to continue.</p>
        </div>
        <div class="page" id="page-5">
            <h2>Lists</h2>
            <p>If you want to make a bullet point or a numerical list, you can 
            make a list in HTML which is styled nicely. For a bullet point
            list, use the <span class="code term">ul</span> (unordered list)
            tag to enclose the list. Then, surround each element of the list
            with the <span class="code term">li</span> (list item) tag:</p>
            <?php echo makeWhiteboard('html-basics_lists-ul',
                true, true, 12, 12,
'Ingredients\n\
<ul>\n\
  <li>1 cup butter</li>\n\
  <li>2 cups sugar</li>\n\
  <li>2 eggs</li>\n\
  <li>3 cups flour</li>\n\
  <li>2 teaspoons vanilla extract</li>\n\
  <li>1/2 teaspoon salt</li>\n\
  <li>1 teaspoon baking soda</li>\n\
  <li>2 cups chocolate chips</li>\n\
</ul>', '', 0); ?>

            <p>Making a numbered list is almost exactly the same, except you use
            the <span class="code term">ol</span> (ordered list) tag instead of
            <span class="code term">ul</span>:</p>
            <?php echo makeWhiteboard('html-basics_lists-ol',
                true, true, 16, 16, 
'Directions\n\
<ol>\n\
  <li>Preheat the oven to 350 degrees Fahrenheit.</li>\n\
  <li>Cream together the butter and sugar until smooth.</li>\n\
  <li>Beat in eggs, one at a time.</li>\n\
  <li>Stir in the vanilla.</li>\n\
  <li>Stir in the baking soda and salt.</li>\n\
  <li>Stir in the flour and chocolate chips.</li>\n\
  <li>With a spoon, drop the dough onto a baking pan.</li>\n\
  <li>Bake for about 10 minutes or until the edges are browned. Enjoy!</li>\n\
</ol>', '', 0); ?>

            <p>Lists are often used for other things, such as making navigation
            links on websites. You can see an example of that in one of the later
            CSS tutorials.</p>
            
            <h3>Exercise: nesting lists</h3>
            <p>Putting tags within another set of outer tags is called
            <em>nesting</em>. It turns out we can nest lists. That is, we can
            have an entire list be part of a list item. Can you recreate this?
            You can also practice making things bold and adding headings (use
            <span class="code term">h3</span>).</p>
            <?php echo makeWhiteboard('html-basics_lists-ex1goal',
                false, false, 18, 18, 
'<h3>Directions</h3>\n\
<ol>\n\
  <li>Preheat the oven to 350 degrees Fahrenheit.</li>\n\
  <li>Mix sugar with wet ingredients.\n\
    <ul>\n\
      <li>Butter</li>\n\
      <li>Sugar</li>\n\
      <li>Eggs</li>\n\
      <li>Vanilla</li>\n\
    </ul>\n\
  </li>\n\
  <li>Mix in dry ingredients.\n\
    <ul>\n\
      <li>Baking soda</li>\n\
      <li>Salt</li>\n\
      <li>Flour</li>\n\
      <li>Chocolate chips</li>\n\
    </ul>\n\
  </li>\n\
  <li>Drop dough onto a baking pan and bake for <strong>10 minutes</strong>.</li>\n\
</ol>', '', 0); ?>

            <?php echo makeWhiteboard('html-basics_lists-ex1',
                true, true, 24, 24, 
'Directions\n\
<ol>\n\
  <li>Preheat the oven to 350 degrees Fahrenheit.</li>\n\
  <li>Mix sugar with wet ingredients.\n\
    \n\
      Butter\n\
      Sugar\n\
      Eggs\n\
      Vanilla\n\
    \n\
  </li>\n\
  <li>Mix in dry ingredients.\n\
    \n\
      Baking soda\n\
      Salt\n\
      Flour\n\
      Chocolate chips\n\
    \n\
  </li>\n\
  <li>Drop dough onto a baking pan and bake for 10 minutes.</li>\n\
</ol>', '', 0); ?>

            <?php echo makeSolution(makeWhiteboard(
                'html-basics_lists-ex1sol', false, true, 24, 24, 
'<h2>Directions</h2>\n\
<ol>\n\
  <li>Preheat the oven to 350 degrees Fahrenheit.</li>\n\
  <li>Mix sugar with wet ingredients.\n\
    <ul>\n\
      <li>Butter</li>\n\
      <li>Sugar</li>\n\
      <li>Eggs</li>\n\
      <li>Vanilla</li>\n\
    </ul>\n\
  </li>\n\
  <li>Mix in dry ingredients.\n\
    <ul>\n\
      <li>Baking soda</li>\n\
      <li>Salt</li>\n\
      <li>Flour</li>\n\
      <li>Chocolate chips</li>\n\
    </ul>\n\
  </li>\n\
  <li>Drop dough onto a baking pan and bake for <strong>10 minutes</strong>.</li>\n\
</ol>', '', 0)); ?>
            
            <p>Yes, that recipe works! Click "next page" to move on.</p>
        </div>
        <div class="page" id="page-6">
            <h2>Links and attributes</h2>
            <p>Links are what make websites work. It would be impossible to
            browse if there weren't links from page to page. You can make a link
            using the <span class="code term">a</span> (anchor) tag. You'll
            notice this tag looks a little different:</p>
            <?php echo makeWhiteboard(
                'html-basics_links-basic', true, true, 4, 4, 
'<p>Need to find something? Use <a href="http://google.com">Google</a>.</p>',
                '', 0); ?>
            
            <p>(If you clicked on the link, you can return the preview window
            back to its previous state by clicking on the left hand side.)
            </p>
            
            <p>All tags have <span class="term">attributes</span>, but we
            haven't talked about them until now. Attributes are additional
            pieces of information that are relevant to a tag. In this example,
            <span class="code term">href</span> (hyperlink reference) is the
            attribute, and <span class="code">http://google.com</span> is its
            value. This makes sense, because we can't just surround the word
            "Google" with <span class="code">a</span> tags and expect it to know
            where to go. We need the <span class="code">href</span> attribute to
            say where the link goes.</p>
            
            <p>Tags can have more than one attribute, so the general form of a
            tag is:</p>
            <blockquote class="code">&lt;tag attribute1="value1" attribute2="value2" ... attributeN="valueN"&gt;</blockquote>
            
            <p>As an example of that, anchor tags have another attribute called
            <span class="code term">target</span>. It specifies where the page
            should open. By default, all pages open in the same window or tab.
            But, if you set <span class="code">target="_blank"</span>, it'll
            open in a new window instead.</p>
            
            <?php echo makeWhiteboard(
                'html-basics_links-target', true, true, 4, 4, 
'<p>Need to find something? Use <a href="http://google.com" target="_blank">Google</a>.</p>',
                '', 0); ?>
                
            <p>The order in which you put the attributes doesn't matter (try
            it!)</p>
                
            <h3>Linking to files</h3>
            <p>You can link to stuff other than webpages on your own site
            easily, by just copying the URL and pasting it as the value of the
            <span class="code">href</span> attribute. Try making a link to
            <a href="images/poodle.jpg" target="_blank">this picture of the Web
            Dev 101 mascot</a>:</p>
            <?php echo makeWhiteboard(
                'html-basics_links-image', true, true, 10, 10, 
'<p>Look at <a>this adorable dog</a>!</p>',
                '', 0); ?>
                
            <?php echo makeSolution(makeWhiteboard(
                'html-basics_links-imagesol', false, true, 10, 10, 
'<p>Look at <a href="http://'.$_SERVER['SERVER_NAME'].'/tutorials/html-basics/images/poodle.jpg">this adorable dog</a>!</p>',
                '', 0)); ?>
                
            <p>You can do the same thing with any kind of file: ZIPs, PDFs, 
            MP3s, you name it.</p>
            
            <h3>Linking to an email address</h3>
            <p>Linking to an email address looks like this:</p>
            <?php echo makeWhiteboard(
                'html-basics_links-email', true, true, 6, 6, 
'<h1>George Bluefin\\\'s website</h1>\n\
<p>Shoot me an <a href="mailto:gbluefin@webdev101.net">email</a>!</p>',
                '', 0); ?>
            
            <h3>Linking to different areas of the same page</h3>
            <p>Not all tags have the same attributes. However, there is a small
            group of attributes that all tags share. You'll learn about some of
            these when you start doing CSS. But, one of these tags is the
            <span class="code term">id</span> tag.</p>
            
            <p>The value of the <span class="code term">id</span> is just some
            name for that element that you make up. It should be unique, i.e.,
            no two elements should have the same <span class="code">id</span>.
            </p>
            
            <p>You can link to a particular element if you give that element an
            <span class="code">id</span>. Say you have an element like this:</p>
            <blockquote class="code">&lt;h3 id="rule_2-7-1"&gt;Rule 2.7.1&lt;/h3&gt;</blockquote>
            <p>Then you can make your browser jump to that particular element
            by making a link to the id name, with a '#' character in front of
            it, like this:</p>
            <blockquote class="code">See &lt;a href="#rule_2-7-1"&gt;Rule 2.7.1&lt;/a&gt;</blockquote>
            
            <p>This is perfect for things like making a table of contents when
            you have a long page. This is illustrated in the following example.
            As an exercise, complete the list so that clicking on "All's Well
            That Ends Well" and "As You Like It" jumps to the appropriate
            section.</p>
            
            <?php echo makeWhiteboard(
                'html-basics_links-hash', true, true, 20, 20, 
'<h1 id="top">Dramatis Personae for Selected Works of Shakespeare</h1>\n\
<p>We have the dramatis personae for the following works of Shakespeare:</p>\n\
<ol>\n\
  <li>All\\\'s Well That Ends Well</li>\n\
  <li>As You Like It</li>\n\
  <li><a href="#the_comedy_of_errors">The Comedy of Errors</a></li>\n\
  <li><a href="#hamlet">Hamlet</a></li>\n\
</ol>\n\
\n\
<h2 id="alls_well_that_ends_well">All\\\'s Well That Ends Well</h2>\n\
<pre>\n\
  KING OF FRANCE\n\
  THE DUKE OF FLORENCE\n\
  BERTRAM, Count of Rousillon\n\
  LAFEU, an old lord\n\
  PAROLLES, a follower of Bertram\n\
  TWO FRENCH LORDS, serving with Bertram\n\
  \n\
  STEWARD, Servant to the Countess of Rousillon\n\
  LAVACHE, a clown and Servant to the Countess of Rousillon\n\
  A PAGE, Servant to the Countess of Rousillon\n\
  \n\
  COUNTESS OF ROUSILLON, mother to Bertram\n\
  HELENA, a gentlewoman protected by the Countess\n\
  A WIDOW OF FLORENCE.\n\
  DIANA, daughter to the Widow\n\
  \n\
  VIOLENTA, neighbour and friend to the Widow\n\
  MARIANA, neighbour and friend to the Widow\n\
  \n\
  Lords, Officers, Soldiers, etc., French and Florentine\n\
</pre>\n\
<a href="#top">Back to top</a>\n\
\n\
<h2 id="as_you_like_it">As You Like It</h2>\n\
<pre>\n\
  DUKE, living in exile\n\
  FREDERICK, his brother, and usurper of his dominions\n\
  AMIENS, lord attending on the banished Duke\n\
  JAQUES,   "      "       "  "     "      "\n\
  LE BEAU, a courtier attending upon Frederick\n\
  CHARLES, wrestler to Frederick\n\
  OLIVER, son of Sir Rowland de Boys\n\
  JAQUES,   "   "  "    "     "  "\n\
  ORLANDO,  "   "  "    "     "  "\n\
  ADAM,   servant to Oliver\n\
  DENNIS,     "     "   "\n\
  TOUCHSTONE, the court jester\n\
  SIR OLIVER MARTEXT, a vicar\n\
  CORIN,    shepherd\n\
  SILVIUS,     "\n\
  WILLIAM, a country fellow, in love with Audrey\n\
  A person representing HYMEN\n\
  \n\
  ROSALIND, daughter to the banished Duke\n\
  CELIA, daughter to Frederick\n\
  PHEBE, a shepherdes  \n\
  AUDREY, a country wench\n\
  \n\
  Lords, Pages, Foresters, and Attendants\n\
</pre>\n\
<a href="#top">Back to top</a>\n\
\n\
<h2 id="the_comedy_of_errors">The Comedy of Errors</h2>\n\
<pre>\n\
  SOLINUS, Duke of Ephesus\n\
  AEGEON, a merchant of Syracuse\n\
  \n\
  ANTIPHOLUS OF EPHESUS twin brothers and sons to\n\
  ANTIPHOLUS OF SYRACUSE Aegion and Aemelia\n\
  \n\
  DROMIO OF EPHESUS twin brothers, and attendants on\n\
  DROMIO OF SYRACUSE the two Antipholuses\n\
  \n\
  BALTHAZAR, a merchant\n\
  ANGELO, a goldsmith\n\
  FIRST MERCHANT, friend to Antipholus of Syracuse\n\
  SECOND MERCHANT, to whom Angelo is a debtor\n\
  PINCH, a schoolmaster\n\
  \n\
  AEMILIA, wife to Aegeon; an abbess at Ephesus\n\
  ADRIANA, wife to Antipholus of Ephesus\n\
  LUCIANA, her sister\n\
  LUCE, servant to Adriana\n\
  \n\
  A COURTEZAN\n\
  \n\
  Gaoler, Officers, Attendants\n\
</pre>\n\
<a href="#top">Back to top</a>\n\
\n\
<h2 id="hamlet">Hamlet</h2>\n\
<pre>\n\
  Claudius, King of Denmark.\n\
  Hamlet, Son to the former, and Nephew to the present King.\n\
  Polonius, Lord Chamberlain.\n\
  Horatio, Friend to Hamlet.\n\
  Laertes, Son to Polonius.\n\
  Voltimand, Courtier.\n\
  Cornelius, Courtier.\n\
  Rosencrantz, Courtier.\n\
  Guildenstern, Courtier.\n\
  Osric, Courtier.\n\
  A Gentleman, Courtier.\n\
  A Priest.\n\
  Marcellus, Officer.\n\
  Bernardo, Officer.\n\
  Francisco, a Soldier\n\
  Reynaldo, Servant to Polonius.\n\
  Players.\n\
  Two Clowns, Grave-diggers.\n\
  Fortinbras, Prince of Norway.\n\
  A Captain.\n\
  English Ambassadors.\n\
  Ghost of Hamlet\\\'s Father.\n\
  \n\
  Gertrude, Queen of Denmark, and Mother of Hamlet.\n\
  Ophelia, Daughter to Polonius.\n\
  \n\
  Lords, Ladies, Officers, Soldiers, Sailors, Messengers, and other Attendants.\n\
</pre>\n\
<a href="#top">Back to top</a>',
                '', 0); ?>
                
            <p>Click "next page" to move on.</p>
        </div>
        <div class="page" id="page-7">
            <h2>Images</h2>
            <p>We'll often want to put pictures in our webpages. To do so, we'll
            use the <span class="code term">img</span> (image) tag:</p>
            <?php echo makeWhiteboard(
                'html-basics_images-basic', true, true, 15, 15, 
'<p>Look at this adorable dog!</p>\n\
<img src="http://'.$_SERVER['SERVER_NAME'].'/tutorials/html-basics/images/poodle.jpg" width="370" height="161" \
alt="Web Dev 101" title="Zzz..." />',
                '', 0); ?>
                
            <p>The image tag, like the <span class="code term">br</span> tag,
            has no closing <span class="code">&lt;/img&gt;</span> tag. This is
            because it also doesn't make sense to define the "end" of an image.
            Like a line break, it's either there or it isn't.</p>
            
            <p>You'll also notice that the <span class="code term">img</span>
            tag uses attributes like the <span class="code term">a</span> tag
            does:</p>
            
            <dl>
                <dt><span class="code term">src</dt>
                <dd>Stands for "source." This gives the location of the image.
                This attribute is required, because otherwise, the browser
                wouldn't know what image to display!</dd>
                <dt><span class="code term">width</span> and <span
                class="code term">height</span></dt>
                <dd>These give the width and height of the image, in pixels.
                Try changing the width to "200" and the height to "89". You've
                just halved the size! You can  set the values to anything to
                warp the image. These attributes are not required. If you don't
                include these attributes, then the browser will automatically
                use the image's natural size.</dd>
                <dt><span class="code term">alt</dt>
                <dd>Stands for "alternate text." If for some reason your image
                doesn't load, then this text appear as a replacement. This text
                is also used for accessibility, like software that helps blind
                people surf the web. As such, this attribute is required.
                Finally, some search engines will use the alternative text as
                part of their image search algorithms.</dd>
                <dt><span class="code term">title</dt>
                <dd>This specifies the text that appears when you hover your
                mouse over the image.</dd>
            </dl>
            
            <p>We'll learn how to position and draw borders around images when
            we go into CSS. Click "next page" to move on.</p>
        </div>
        <div class="page" id="page-8">
            <h2>Comments</h2>
            <p>You can add "comments" to your HTML code. Comments don't actually
            appear in the page. Instead, you can use them to write notes to
            yourself, as well as others who work on the same code. This is
            useful once the pages start getting really big and complex.</p>
            
            <p>To write a comment, enclose it like this:</p>
            <?php echo makeWhiteboard(
                'html-basics_comment', true, true, 15, 15, 
'<p>This is not a comment. It appears on the page.</p>\n\
<!-- This is a comment. It doesn\\\'t appear in the page. -->\n\
<!--\n\
   _____                                      _  \n\
  / ____|                                    | |  \n\
 | |      ___  _ __ ___  _ __ ___   ___ _ __ | |_ \n\
 | |     / _ \\\| \\\'_ ` _ \\\| \\\'_ ` _ \\\ / _ \\\ \\\'_ \\\| __|\n\
 | |____| (_) | | | | | | | | | | |  __/ | | | |_ \n\
  \\\_____|\\\___/|_| |_| |_|_| |_| |_|\\\___|_| |_|\\\__|\n\
-->',
                '', 0); ?>
            <p>That's it for this page. Click "next page" to finish up this
            tutorial.</p>
        </div>
        
        <div class="page" id="page-9">
            <h2>Review exercise: a personal homepage</h2>
            <p>By now, we've covered most of the basic elements you need to
            define the content of a website. As a practice of everything we've
            seen so far, try making a personal homepage that looks like this:
            </p>
            <?php echo makeWhiteboard(
                'html-basics_reviewgoal', false, false, 20, 20, 
'<h1>George Bluefin\\\'s personal homepage</h1>\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
<a href="mailto:gbluefin@webdev101.net">\n\
  gbluefin@webdev101.net\n\
</a><br />\n\
<br />\n\
<img src="http://'.$_SERVER['SERVER_NAME'].'/tutorials/html-basics/images/george.jpg" width="300" height="240" alt="George Bluefin" title="George Bluefin" />\n\
\n\
<h2>Table of contents</h2>\n\
<ol>\n\
  <li><a href="#about-me">About me</a></li>\n\
  <li><a href="#summer-2010">Summer 2010</a></li>\n\
</ol>\n\
\n\
<h2 id="about-me">About me</h2>\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school. Some of my hobbies include:</p>\n\
<ul>\n\
  <li>Swimming around</li>\n\
  <li>Eating stuff</li>\n\
  <li>Blowing bubbles</li>\n\
</ul>\n\
\n\
<h2 id="summer-2010">Summer 2010</h2>\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>', '', 0); ?>

            <p>Here are the things you need to do:</p>
            <ol>
                <li>
                    Make "George Bluefin's personal homepage" into an
                    <span class="code term">h1</span> heading, and "Table of
                    contents," "About me," and "Summer 2010" into <span
                    class="code term">h2</span> headings.
                </li>
                <li>
                    Put paragraph tags around the paragraphs of text in the
                    "About me" and "Summer 2010" sections.
                </li>
                <li>
                    Add line breaks to the end of the lines for George's
                    address.
                </li>
                <li>
                    Make his email address into a link. His email address is
                    <strong>gbluefin@webdev101.net</strong>.
                </li>
                <li>
                    Add <a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tutorials/html-basics/images/george.jpg'?>" target="_blank">this picture</a>
                    of George underneath his contact information. Its native
                    size is 300 pixels wide by 240 pixels tall. Also, put a line
                    break between his contact information and his picture.
                </li>
                <li>
                    Make the table of contents into an ordered list.
                </li>
                <li>
                    Give the <span class="code term">h2</span> tags <span
                    class="code term">id</span> attributes. Then make the table
                    of contents link to those sections.
                </li>
                <li>
                    Make George's hobbies into an unordered list.
                </li>
                <li>
                    Make George's name bold in the "About me" section.
                </li>
                <li>
                    Italicize the word "really" in the "Summer 2010" section.
                </li>
            </ol>
            
            <p>If you want extra space, you can use our site's
            <a href="/whiteboard" target="_blank">full-page whiteboard</a> for
            this exercise.

            <?php echo makeWhiteboard(
                'html-basics_review', true, true, 33, 33, 
'George Bluefin\\\'s personal homepage\n\
742 Coral Reef Lane\n\
Pacific Ocean, 10023\n\
gbluefin@webdev101.net\n\
\n\
(Picture of George)\n\
\n\
Table of contents\n\
  \n\
    About me\n\
    Summer 2010\n\
  \n\
\n\
About me\n\
Hi! My name\\\'s George Bluefin. Like most fish my age, I spend most of my time in my school. Some of my hobbies include:\n\
  \n\
    Swimming around\n\
    Eating stuff\n\
    Blowing bubbles\n\
  \n\
\n\
Summer 2010\n\
Last summer, I got to visit beautiful Australia! They have a really big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.',
                '', 0); ?>
            
            <?php echo makeSolution(makeWhiteboard(
                'html-basics_reviewsol', false, true, 34, 34, 
'<h1>George Bluefin\\\'s personal homepage</h1>\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
<a href="mailto:gbluefin@webdev101.net">\n\
  gbluefin@webdev101.net\n\
</a><br />\n\
<br />\n\
<img src="http://'.$_SERVER['SERVER_NAME'].'/tutorials/html-basics/images/george.jpg" width="300" height="240" alt="George Bluefin"\ title="George Bluefin" />\n\
\n\
<h2>Table of contents</h2>\n\
<ol>\n\
  <li><a href="#about-me">About me</a></li>\n\
  <li><a href="#summer-2010">Summer 2010</a></li>\n\
</ol>\n\
\n\
<h2 id="about-me">About me</h2>\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school. Some of my hobbies include:</p>\n\
<ul>\n\
  <li>Swimming around</li>\n\
  <li>Eating stuff</li>\n\
  <li>Blowing bubbles</li>\n\
</ul>\n\
\n\
<h2 id="summer-2010">Summer 2010</h2>\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>',
                '', 0)); ?>
            <p>In the next tutorial, you'll learn how to change the appearance
            of your webpage using CSS. After that tutorial, you can learn more
            about HTML in the rest of our HTML tutorials. They cover topics
            like how to make HTML tables and how to embed services like Google
            Maps into your site.</p>
            
            <h3>Tutorial survey</h3>
            <p>You can help us improve our tutorials by answering one question
            for us:</p>
            <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dDNZNlRtdER4RlpiTU1oLW1yLTczMHc6MQ" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>