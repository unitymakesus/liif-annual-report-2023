@extends('_layouts.main')

@section('body')
<div class="container">
  <header>
      <div class="report-title">
          <a href="https://www.liifund.org/">
              <img src="{{ url('/assets/build/images/logo-liif.svg') }}" class="liif-logo" alt="Low Income Investement Fund">
          </a>
          <h1>2023 Annual Impact Report</h1>
      </div>
      <div class="socials-header">
          <ul>
              <li><a href="https://linkedin.com"><img src="{{ url('/assets/build/images/Icon-linkedin.svg') }}" alt="LinkedIn Logo"></a></li>
              <li><a href="https://twitter.com"><img src="{{ url('/assets/build/images/Icon-twitter.svg') }}" alt="X Logo"></a></li>
              <li><a href="https://facebook.com"><img src="{{ url('/assets/build/images/Icon-facebook.svg') }}" alt="Facebook logo"></a></li>
              <li><a href="https://youtube.com"><img src="{{ url('/assets/build/images/Icon-youtube.svg') }}" alt="YouTube logo"></a></li>
          </ul>
      </div>
  </header>

  <section class="hero">
    <div class="message">
        <h2>Scaling Up</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="hero-photo">
      <img src="{{ url('/assets/build/images/library.png') }}" alt="Four children sitting on a carpet listening while an adult shows them a book.">
    </div>
  </section>

  <section class="white-area-msg">
    <p>
      LIIF mobilizes capital and partners to achieve this vision for people and communities. Everyone in the United States should benefit from living in a community of opportunity, equity and well-being.
    </p>
  </section>

  <section class="blue-info-area history">
    <article>
      <h2>Our History</h2>
      <p>Low Income Investmnt Fund (LIIF) is a national community development financial institution (CDFI) that invests in communities of opportunity, equity and well-being. Headquartered in San Francisco since its inception almost four decades ago, the organization has regional offices in Los Angeles, New York City, Washington, D.C. and Atlanta. As a CDFI, LIIF supports projects that have high social value but lack access to traditional financial institutions. Since 1984, LIIF has deployed more than $3.2 billion to serve 2.5 million people in communities across the country from its five offices. An Aeris and S&P-rated organization, LIIF funds healthy communities by providing innovative capital solutions.</p>
      <a href="#">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Read the full story
      </a>
    </article>
    <img src="{{ url('/assets/build/images/liif-history-story.png') }}" alt="Partially visible illustrated timeline photo of tiif">
  </section>

  <section class="leadership-msg">
    <h2>Leadership Perspectives</h2>
    <img src="{{ url('/assets/build/images/leadership-daniel.png') }}" alt="Portrait photo of Daniel A. Nissenbaum">
    <div class="leadership-quote">
      <figure class="quote">
        <blockquote>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat voluptua.
        </blockquote>
        <figcaption>
          Daniel A. Nissenbaum, LIIF Chief Executive Officer
        </figcaption>
      </figure>
      <a href="#" class="read-link">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Read the full letter
      </a>
    </div>
  </section>

  <section class="investments">
    <h2>$5Billion</h2>
  </section>

  <section class="white-info-area">
    <article>
      <h2>GAP Child Care Center,</br> Washington, D.C.</h2>
      <p>Enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt.</p>
      <a href="#" class="read-link">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Read the full story
      </a>
    </article>
    <img src="{{ url('/assets/build/images/library.png') }}" alt="Four children sitting on a carpet listening while an adult shows them a book.">
    <figure>
      <blockquote>
        “Pat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis”
      </blockquote>
      <figcaption><b>Quote Attribution Here</b></figcaption>
    </figure>
  </section>

  <section class="blue-info-area equity">
    <article>
      <h2>EQUITY COMMITMENT AND IMPACT-RISK-PROFITABILITY</h2>
      <p>Enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt.</p>
      <a href="#">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Read the full story
      </a>
    </article>
    <img src="{{ url('/assets/build/images/equity.png') }}" alt="Hand holding a piece of paper with the largest phrase saying Racial Equity">
    <figure>
      <blockquote>
        “Pat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis”
      </blockquote>
      <figcaption><b>Quote Attribution Here</b></figcaption>
    </figure>
  </section>

  <section class="white-info-area af-housing">
    <article>
      <h2>Affordable Housing</h2>
      <p>Enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt.</p>
      <a href="#" class="read-link">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Read the full story
      </a>
        <a href="#" class="read-link">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Learn more about other developers
      </a>
    </article>
    <img src="{{ url('/assets/build/images/vid-affordable-housing.png') }}" alt="Video thumbnail">
    <figure>
      <blockquote>
        “I’m excited that this endeavor [Growing Diverse Housing Developers] gives me an opportunity to level the playing field and have access to the capital we need to redevelop our community.”
      </blockquote>
      <figcaption><b>Kathy Flanagan Payton, President and Chief Executive Officer Fifth Ward Community Redevelopment Corporation, Houston Texas</b></figcaption>
    </figure>
  </section>

  <section class="blue-info-area early-care-education">
    <article>
      <h2>EARLY CARE AND EDUCATION</h2>
      <p>Enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt.</p>
      <a href="#">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Read the full story
      </a>
        <a href="#">
        <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
        Listen to the interview
      </a>
    </article>
    <img src="{{ url('/assets/build/images/early-care.png') }}" alt="Small child being carried on a womans back while both are laughing">
    <figure>
      <blockquote>
        “Pat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis”
      </blockquote>
      <figcaption><b>Quote Attribution Here</b></figcaption>
    </figure>
  </section>

  <section class="about-partnerships">
    <article>
      <h2>About Our Partnerships</h2>
      <div>
        <h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</h3>
        <p> Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est. Lorem ipsum dolor sit amet.</p>
      </div>
      <div>
        <h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</h3>
        <p> Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est. Lorem ipsum dolor sit amet.</p>
      </div>
    </article>
  </section>

  <section class="thanks">

  </section>

  <footer>
      <div class="footer-content">
          <h2 class="footer-msg">
              Join us in our work building communities of opportunity, equity and well-being across the nation!
          </h2>
          <div class="footer-logo">
              <img src="{{ url('/assets/build/images/logo-liif.svg') }}" class="footer-liif-logo" alt="Low Income Investement Fund">
          </div>

          <div class="newsletter-grp">
              <h3>Sing up for LIIF's monthly newsletter</h3>
              <form action="">
              <label for="newsletter">Your email</label>
              <input type="text" id="newsletter" name="newsletter" required>
              <button>SUBMIT</button>
              </form>
          </div>

          <div class="footer-socials">
              <ul>
                  <li><a href="https://linkedin.com"><img src="{{ url('/assets/build/images/Icon-footer-linkedin.svg') }}" alt="LinkedIn Logo"></a></li>
                  <li><a href="https://twitter.com"><img src="{{ url('/assets/build/images/Icon-footer-twitter.svg') }}" alt="X Logo"></a></li>
                  <li><a href="https://facebook.com"><img src="{{ url('/assets/build/images/Icon-footer-facebook.svg') }}" alt="Facebook logo"></a></li>
                  <li><a href="https://youtube.com"><img src="{{ url('/assets/build/images/Icon-footer-youtube.svg') }}" alt="YouTube logo"></a></li>
              </ul>
          </div>

          <address class="locations">
              <div>
                  <h4>Headquarters:</h4>
                  <p>49 Stevenson St., Suite 300</p>
                  <p>San Francisco, CA 94105</p>
              </div>
              <div>
                  <h4>Other Regional Offices:</h4>
                  <p>Los Angeles | New York</p>
                  <p>Washington, D.C. | Atlanta</p>
              </div>
          </address>

      </div>

      <div class="bottom-row">
          <p>Copyright &copy; 2023 Low Income Investment Fund, 2023 Annual Impact Report</p>
      </div>

  </footer>
</div>
@endsection
