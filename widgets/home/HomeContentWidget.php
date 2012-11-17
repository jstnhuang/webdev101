<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/WidgetSystem.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../config/Config.php");

/**
 *
 */
class HomeContentWidget extends Widget {
  public function __construct() {
    parent::__construct(dirname(__FILE__));
  }
  
  public function toHtml() {
    global $config;
  
    $result = "";
    $result .= <<<EOT
      <div class="homeInfo">
        <div class="homeInfoNav">
          <ul>
            <li><a href="#learn" name="learn">Learn</a></li>
            <li><a href="#experiment" name="experiment">Experiment</a></li>
            <li><a href="#personalize" name="personalize">Personalize</a></li>
          </ul>
        </div>
        <div class="homeInfoContainer">
          <div class="homeInfoDescription" id="learn">
            <h1>Welcome to Web Dev 101</h1>
            
            <div class="homeInfoFeature">
              <img src="images/home/fake-youtube-small.jpg" />
            </div>
            
            <p>Here you can learn to program websites in HTML, CSS, and
            Javascript.</p>
            
            <a href="/tutorials" class="homeLink">&gt;&gt; View our video courses</a>
            
            <h2>Beginner-friendly</h2>
            <p>Our lessons are designed for beginners, so don't worry if
            you've never programmed before.</p>
EOT;
    if ($config->get("webdev101", "NOTEBOOK_READY")) {
      $result .= <<<EOT
            <h2>Your online reference</h2>
            <p>Each lesson comes with a set of online notes, stored in the Web
            Dev 101 notebook. So, you can quickly remember what you learned.</p>
EOT;
    }
    $result .= <<<EOT
            <h2>Why learn web development?</h2>
            <p>There are so many good reasons to learn with us!
              <ol>
                <li>Website programming is a useful skill to have.</li>
                <li>You can express your creativity in web development as much as your engineering skill.</li>
                <li>You already have all the tools to learn: you and your web browser!</li>
              </ol>
            </p>
          </div>
          
          <div class="homeInfoDescription" id="experiment">
            <h1>Experiment and learn by doing</h1>
            <p>The best way to learn is to practice. We
            give you plenty of chances to do just that!</p>
            <a href="/whiteboard" class="homeLink">&gt;&gt; Go to the whiteboard</a>
            
            <h2>Interactive code editor</h2>
            <p>Our online editor is one of a kind. Just start typing code into our whiteboard, and you'll automatically begin to see the
            resulting web page immediately.</p>
            
            <h2>No special tools required</h2>
            <p>No special tools or expensive software packages required. You
            just need to browse to our whiteboard, and you can save your code 
            to our cloud.</p>
            
            <h2>Learning through practice</h2>
            <p>Every tutorial comes with a set of interactive exercises, so you
            can do actual programming as you learn, and get feedback on your
            results.</p>
            
          </div>
          
          <div class="homeInfoDescription" id="personalize">
            <h1>Personalized learning</h1>
            <p>Create a Web Dev 101 account to personalize your learning
            experience.</p>
            <a href="/me" class="homeLink">&gt;&gt; Create an account</a>
            
            <h2>Host web pages online</h2>
            <p>All Web Dev 101 users can create their own online websites,
            and save it to our cloud. It's a great way to create
            a personal website or showcase what you've learned!</p>
            
            <h2>Personalized notebook</h2>
            <p>Web Dev 101 users can add their own notes to their notebook, in
            addition to the ones that come with each course.</p>
            
            <h2>Track your progress</h2>
            <p>Log in with your Web Dev 101 account, and we'll keep track of
            the courses and exercises you've completed, and save all your
            work!</p>
          </div>
        </div>
      </div>
EOT;
    return $result;
  }
}
?>