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

<footer>
    <div class="footer-content">
        <h3 class="footer-msg">
            Join us in our work building communities of opportunity, equity and well-being across the nation!
        </h3>
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
        <p>Copyright &copy; 2023 Low Income Investment Fund, 2023 Annual Impoact Report</p>
    </div>

</footer>

@endsection
