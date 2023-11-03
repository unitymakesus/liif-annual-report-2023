@extends('_layouts.main')

@section('body')

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

<section class="history">
  <h2>Our History</h2>
  <img src="{{ url('/assets/build/images/liif-history-story.png') }}" alt="Partially visible illustrated timeline photo of tiif">
  <p>Low Income Investmnt Fund (LIIF) is a national community development financial institution (CDFI) that invests in communities of opportunity, equity and well-being. Headquartered in San Francisco since its inception almost four decades ago, the organization has regional offices in Los Angeles, New York City, Washington, D.C. and Atlanta. As a CDFI, LIIF supports projects that have high social value but lack access to traditional financial institutions. Since 1984, LIIF has deployed more than $3.2 billion to serve 2.5 million people in communities across the country from its five offices. An Aeris and S&P-rated organization, LIIF funds healthy communities by providing innovative capital solutions.</p>
  <a href="#">
    <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
    Read the full story
  </a>
</section>

<section class="leadership-msg">
  <h2>Leadership Perspectives</h2>
  <img src="{{ url('/assets/build/images/leadership-daniel.png') }}" alt="Portrait photo of Daniel A. Nissenbaum">
  <figure class="quote">
    <blockquote>
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat voluptua.
    </blockquote>
    <figcaption>
      Daniel A. Nissenbaum, LIIF Chief Executive Officer
    </figcaption>
  </figure>
    <a href="#">
    <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
    Read the full letter
  </a>
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
            <h4>Sing up for LIIF's monthly newsletter</h4>
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

@endsection
