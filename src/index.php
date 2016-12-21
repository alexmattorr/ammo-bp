<?php include 'header.php'; ?>

<!-- Delete all of the following -->
<main>
  <section>
    <hgroup>
      <h1>h1 HTML5 Kitchen Sink</h1>
      <h2>h2 Back in my quaint <a href='#'>garden</a></h2>
      <h3>h3 Jaunty <a href='#'>zinnias</a> vie with flaunting phlox</h3>
      <h4>h4 Five or six big jet planes zoomed quickly by the new tower.</h4>
      <h5>h5 Expect skilled signwriters to use many jazzy, quaint old alphabets effectively.</h5>
      <h6>h6 Pack my box with five dozen liquor jugs.</h6>
    </hgroup>
  </section>
  <hr>
  <section>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <article>
      <p>This paragraph is nested inside an article. It contains many different, sometimes useful, <a href="http://www.w3schools.com/tags/">HTML5 tags</a>. Of course there are classics like <em>emphasis</em>, <strong>strong</strong>, and <small>small</small>        but there are many others as well. Hover the following text for abbreviation tag: <abbr title="abbreviation">abbr</abbr>. Similarly, you can use acronym tag like this: <acronym title="For The Win">ftw</acronym>. You can define <del>deleted text</del>        which often gets replaced with <ins>inserted</ins> text.</p>
      You can also use <kbd>keyboard text</kbd>, which sometimes is styled similarly to the <code>&lt;code&gt;</code> or <samp>samp</samp> tags. Even more specifically, there is a tag just for <var>variables</var>. Not to be mistaken with blockquotes
      below, the quote tag lets you denote something as <q>quoted text</q>. Lastly don't forget the sub (H<sub>2</sub>O) and sup (E = MC<sup>2</sup>) tags. </p>
    </article>
    <aside>This is an aside.</aside>
    <footer>This is footer for this section</footer>
  </section>
  <hr>
  <section>
    <blockquote>
      <p>Blockquote: I quickly explained that many big jobs involve few hazards</p>
    </blockquote>
    <blockquote>
      <p>This is a mult-line blockquote with a cite reference. People think focus means saying yes to the thing you’ve got to focus on. But that’s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick
        carefully. I’m actually as proud of the things we haven’tdone as the things I have done. Innovation is saying no to 1,000 things.
        <cite>Steve Jobs – Apple Worldwide Developers’ Conference, 1997</cite>
      </p>
    </blockquote>
  </section>
  <hr>
  <section>
    <table>
      <caption>Tables can have captions now.</caption>
      <tbody>
        <tr>
          <th>Person</th>
          <th>Number</th>
          <th>Third Column</th>
        </tr>
        <tr>
          <td>Someone Lastname</td>
          <td>900</td>
          <td>Nullam quis risus eget urna mollis ornare vel eu leo.</td>
        </tr>
        <tr>
          <td><a href="#">Person Name</a></td>
          <td>1200</td>
          <td>Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla.</td>
        </tr>
        <tr>
          <td>Another Person</td>
          <td>1500</td>
          <td>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
        </tr>
        <tr class="even">
          <td>Last One</td>
          <td>2800</td>
          <td>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</td>
        </tr>
      </tbody>
    </table>
  </section>
  <hr>
  <section>
    <dl>
      <dt>Definition List Title</dt>
      <dd>Definition list division.</dd>
      <dt>Kitchen Sink</dt>
      <dd>Used in expressions to describe work in which all conceivable (and some inconceivable) sources have been mined. In this case, a bunch of markup.</dd>
      <dt>aside</dt>
      <dd>Defines content aside from the page content</dd>
      <dt>blockquote</dt>
      <dd>Defines a section that is quoted from another source</dd>
    </dl>
  </section>
  <hr>
  <section>
    <ul>
      <li>Unordered List item one
        <ul>
          <li>List item one
            <ul>
              <li>List item one</li>
              <li>List item two</li>
              <li>List item three</li>
              <li>List item four</li>
            </ul>
          </li>
          <li>List item two</li>
          <li>List item three</li>
          <li>List item four</li>
        </ul>
      </li>
      <li>List item two</li>
      <li>List item three</li>
      <li>List item four</li>
    </ul>
    <hr>
    <ol>
      <li>List item one
        <ol>
          <li>List item one
            <ol>
              <li>List item one</li>
              <li>List item two</li>
              <li>List item three</li>
              <li>List item four</li>
            </ol>
          </li>
          <li>List item two</li>
          <li>List item three</li>
          <li>List item four</li>
        </ol>
      </li>
      <li>List item two</li>
      <li>List item three</li>
      <li>List item four</li>
    </ol>
  </section>
  <hr>
  <section>
    <address>1 Infinite Loop<br>
  Cupertino, CA 95014<br>
  United States</address>
  </section>
  <hr>
  <section>
    <pre>
pre {
  display: block;
  padding: 7px;
  background-color: #F5F5F5;
  border: 1px solid #E1E1E8;
  border-radius: 3px;
  white-space: pre-wrap;
  word-break: break-all;
  font-family: Menlo, Monaco;
  line-height: 160%;
}</pre>

  </section>
  <hr />

  <figure>
    <img src="https://www.fillmurray.com/505/314">
    <figcaption>Fig1. A picture of Bill Murray from <a href="https://www.fillmurray.com/">fillmurray.com</a></figcaption>
  </figure>

  <hr>
  <section>

    <form>
      <fieldset>
        <legend>Fieldset legend</legend>
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" id="exampleInputEmail1" placeholder="Enter email">
        <small>We'll never share your email with anyone else.</small>
      </fieldset>
      <fieldset>
        <label for="exampleInputPassword1">Password</label>
        <input type="password" id="exampleInputPassword1" placeholder="Password">
      </fieldset>
      <fieldset>
        <label for="exampleSelect1">Example select</label>
        <div class="select-box">
          <select id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
      </fieldset>
      <fieldset>
        <label for="exampleSelect2">Example multiple select</label>
        <select multiple id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
      </fieldset>
      <fieldset>
        <label for="exampleTextarea">Example textarea</label>
        <textarea id="exampleTextarea" rows="3"></textarea>
      </fieldset>
      <fieldset>
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <small>This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
      </fieldset>
      <div>
        <label>
      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
      Option one is this and that&mdash;be sure to include why it's great
    </label>
      </div>
      <div>
        <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Option two can be something else and selecting it will deselect option one
    </label>
      </div>
      <div>
        <label>
      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
      Option three is disabled
    </label>
      </div>
      <div>
        <label>
      <input type="checkbox"> Check me out
    </label>
      </div>
      <button type="button" name="button">Button</button>
      <input type="button" name="input" value="Input Button">
      <input type="submit" name="submit" value="Submit Button">
      <input type="reset" name="reset" value="Reset Button">
    </form>
  </section>

</main>

<?php include 'footer.php'; ?>
