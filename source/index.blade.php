@extends('_layouts.main')

@section('body')
<div class="container-outer">
  <header>
      <div class="report-title">
          <a href="https://www.liifund.org/">
              <img src="{{ url('/assets/build/images/logo-liif.svg') }}" class="liif-logo" alt="Low Income Investement Fund">
          </a>
          <h1>2023 Annual Impact Report</h1>
      </div>
      <div class="socials-header">
          <ul>
              <li><a href="https://www.linkedin.com/company/low-income-investment-fund/mycompany"><img class="" src="{{ url('/assets/build/images/Icon-linkedin.svg') }}" alt="LinkedIn"></a></li>
              <li><a href="https://twitter.com/Liifund"><img src="{{ url('/assets/build/images/Icon-twitter.svg') }}" alt="X"></a></li>
              <li><a href="https://www.facebook.com/liifund"><img src="{{ url('/assets/build/images/Icon-facebook.svg') }}" alt="Facebook"></a></li>
              <li><a href="https://www.youtube.com/user/liifund"><img src="{{ url('/assets/build/images/Icon-youtube.svg') }}" alt="YouTube"></a></li>
          </ul>
      </div>
  </header>

  <section class="hero">
    <div class="message">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 609 85.1" class="svg-line-art">
        <defs>
          <path id="SVGID_1_" d="M140.3 7.3h71.4v71.9h-71.4z"/>
        </defs>
        <clipPath id="SVGID_00000004543654134503819430000017307115259465813132_">
          <use xlink:href="#SVGID_1_" style="overflow:visible"/>
        </clipPath>
        <g>
          <path id="S" d="M43.3 19.5c-4.3-5.8-8.7-10.3-16-10.3-8 0-13.6 5.7-13.6 13 0 4.7 2.5 9.6 6.3 12.5 14.9 11.6 23.6 17.3 23.6 27 0 8.4-7.2 15.8-16.8 15.8-7.7 0-13.6-4.8-18.4-13.6" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10"/>
          <path id="C" d="M128.7 22.6c-6.7-9.1-16.8-13.8-28.5-13.8-19.7 0-35 14.4-35 34.1 0 19.5 14.2 34.4 35.2 34.4 11.6 0 21.3-4.5 28.3-13.1" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10" />
          <path id="A" d="M158.4 52h35.8M144.5 81.2l32-67 31.4 67.2" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10" style="clip-path:url(#SVGID_00000004543654134503819430000017307115259465813132_);"/>
          <path id="L" d="M227.5 7.3v68.2h31.2" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10"/>
          <path id="I" d="M274.8 7.7v70.9" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10"/>
          <path id="N" d="M300.4 78.7V15.4l49.4 55.4V7.5" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10"/>
          <path id="G" d="M438.7 22c-8.6-8.2-17.7-12.5-29.6-12.5-21.2 0-35.5 15.7-35.5 33.9 0 17.8 14 33.8 36.5 33.8 18.1 0 30.7-10.6 32.3-28.8h-26.9" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10"/>
          <path id="U" d="M495.5 7.4v43.8c0 1 .1 4.3.2 5.2.5 6.3 1.9 11.6 5.9 15.8 3.5 3.6 8.3 5.4 14.1 5.4 5.8 0 10.6-1.8 14.1-5.4 4-4.2 5.4-9.4 5.9-15.7.1-.9.2-4.2.2-5.2V7.4" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10"/>
          <path id="P" d="m562.9 79.6-.2-68.5h15.1c6.6 0 11.5.5 14.9 2.3 4.9 2.6 8.2 7.5 8.2 13.4 0 5.2-2.5 9.9-6.3 12.5-4.2 2.9-10.3 3.3-18.3 3.3H563" fill="none" stroke="#FFF" stroke-width="8" stroke-miterlimit="10"/>
        </g>
      </svg>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="hero-photo">
      <img class="lazyload gradient-mask-img-b" data-src="{{ url('/assets/build/images/library.png') }}" alt="Four children sitting on a carpet listening while an adult shows them a book." data-expand="-10" />
    </div>
  </section>

  <section class="white-area-msg py-6 md:py-20">
    <div class="container">
      <div class="max-w-4xl">
        <p>LIIF mobilizes capital and partners to achieve this vision for people and communities. Everyone in the United States should benefit from living in a community of opportunity, equity and well-being.</p>
      </div>
    </div>
  </section>

  <section class="blue-info-area history py-6 md:py-20">
    <div class="container">
      <div class="grid gap-8 md:gap-16 md:grid-cols-12">
        <article class="md:col-span-6">
          <h2>Our History</h2>
          <p>Low Income Investmnt Fund (LIIF) is a national community development financial institution (CDFI) that invests in communities of opportunity, equity and well-being. Headquartered in San Francisco since its inception almost four decades ago, the organization has regional offices in Los Angeles, New York City, Washington, D.C. and Atlanta. As a CDFI, LIIF supports projects that have high social value but lack access to traditional financial institutions. Since 1984, LIIF has deployed more than $3.2 billion to serve 2.5 million people in communities across the country from its five offices. An Aeris and S&P-rated organization, LIIF funds healthy communities by providing innovative capital solutions.</p>
          <a href="#">
            <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
            Read the full story
          </a>
        </article>
        <figure class="md:col-span-6">
          <img class="lazyload gradient-mask-img-b" data-src="{{ url('/assets/build/images/liif-history-story.png') }}" alt="Partially visible illustrated timeline photo of tiif" data-expand="-10" />
        </figure>
      </div>
    </div>
  </section>

  <section class="leadership-msg py-6 md:py-20">
    <div class="container">
      <h2>Leadership Perspectives</h2>
      <div class="grid gap-8 sm:grid-cols-12">
        <img class="lazyload gradient-mask-img-b sm:col-span-3" data-src="{{ url('/assets/build/images/leadership-daniel.png') }}" alt="Portrait photo of Daniel A. Nissenbaum" data-expand="-10" />
        <div class="leadership-quote sm:col-span-9">
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
      </div>
    </div>
  </section>

  <section class="investments py-6 md:py-20">
    <div class="container">
      <div class="investments-data">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 616.9 149.5" class="svg-line-art max-w-2xl">
          <g>
            <g>
              <path id="dollar-symbobl-1" d="M66.3 29.1C60.9 21.3 55.7 17.9 48 16.4l-9.7-.6c-14.7 1.4-21.7 10.7-21.7 20.8 0 12.2 9 17.8 21.7 23.9l9.7 4c14.6 7.8 25.1 14.8 25.1 29 0 11.4-8.7 21.5-25.1 23.7l-9.7.2c-12.4-1.1-22.7-6.3-30.1-17.4" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
              <path id="dollar-symbol-2" d="M43.1 3v142.8" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
            </g>
            <path id="5" d="M160.9 16h-43.1l-7.7 41.8c5-1.9 10.7-4 18-4 18.1 0 30.1 12.8 30.1 30.2 0 18.8-13.4 33.4-32.2 33.4-14.2 0-25.5-9-28-24" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
            <g>
              <path id="B1" d="M237.4 12.8v106.3" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
              <path id="B2" d="M232.8 15.9H256c17.8 0 27 8.7 27 21.3 0 7.8-4 14.8-11.2 19-6.3 3.4-25.7 5.6-29.8 5.6h-4.5" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
              <path id="B3" d="M242.1 61.8c3.7 0 20.9-.2 30.2 2.8l2.8 1.1c10.9 4.4 16.8 12.5 16.8 22.9 0 13.6-11.1 25.1-26.2 25.4-1.8.2-11.7.5-14.1.5h-14.2" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
            </g>
            <g>
              <path id="I1A" d="M324.2 39.1v80.7" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
              <path class="dot" id="I1B" d="M332.7 14.3c0 4.7-4 8.7-8.7 8.7s-8.5-4-8.5-8.7c0-4.9 4-8.5 8.5-8.5 4.7 0 8.7 3.8 8.7 8.5z" fill="none"/>
            </g>
            <path id="L1" d="M390.7 7.9v111.9" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
            <path id="L2" d="M357.6 7.9v111.9" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
            <g>
              <path id="I2A" d="M424.4 39.1v80.7" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
              <path class="dot" id="I2B" d="M432.8 14.3c0 4.7-4 8.7-8.7 8.7s-8.5-4-8.5-8.7c0-4.9 4-8.5 8.5-8.5 4.8 0 8.7 3.8 8.7 8.5z"/>
            </g>
            <path id="O" d="M487.7 42.6c-20.5 0-37.8 16.1-37.8 36.8 0 20.7 17.3 36.8 37.8 36.8 20.3 0 37.2-15.5 37.2-36.8-.1-21.2-16.9-36.8-37.2-36.8z" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
            <g>
              <path id="N1" d="M548.4 39.1v80.7" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
              <path id="N2" d="M548.3 119.7V87.1c0-15 1.3-23.7 8.8-32.5 5.9-7 13-13.4 24.9-13.4 18.7 0 27.4 10.7 27.4 33.8v44.7" fill="none" stroke="#FFF" stroke-width="9" stroke-miterlimit="10"/>
            </g>
          </g>
        </svg>

        <p class="investments-message font-bold text-xl mb-4">LIIF is driving $5 billion in investments to advance racial equity (2020-2030)</p>

        <div class="progressbar-wrapper relative my-8">
          <span class="absolute right-[59%] top-1/4 text-xl font-bold leading-none" aria-hidden="true">43%</span>
          <span class="absolute left-[45%] top-1/4 text-xl font-bold leading-none" aria-hidden="true">reached by June 30, 2023</span>
          <progress role="progressbar" id="progress" tabindex="0" class="progress" aria-label="% of investment goal" value="0" aria-valuemin="0" aria-valuenow="43" aria-valuemax="100" max="100"></progress>
        </div>
        <h3 id="tabs-title">STRATEGIC HUBS ACROSS THE U.S.</h3>
        <div class="us-data">
          <ul aria-labelledby="tabs-title" class="hubs">
            <li><a class="px-6 py-4" href="#sf">
              <span class="text-xl">San Francisco</span> <br />
              Western Region (d)
            </a></li>
            <li><a class="px-6 py-4" href="#la">
              <span class="text-xl">Los Angeles</span> <br />
              Western Region (h)
            </a></li>
            <li><a class="px-6 py-4" href="#ny">
              <span class="text-xl">New York</span> <br />
              Northeast Region
            </a></li>
            <li><a class="px-6 py-4" href="#dc">
              <span class="text-xl">Washington, D.C.</span> <br />
              Mid-Atlantic Region
            </a></li>
            <li><a class="px-6 py-4" href="#atl">
              <span class="text-xl">Atlanta</span> <br />
              Southeast Region
            </a></li>
          </ul>
          <div class="hub-cards">
            <section id="sf" class="hub-data active-card">
              <div class="p-8">
                <h3 class="font-normal text-5xl font-sans">123K</h3>
                <p class="font-bold">region office impact area highlights</p>
              </div>
              <div class="p-8">
                <h3 class="font-normal text-5xl font-sans">634K</h3>
                <p class="font-bold">region office impact area highlights</p>
              </div>
              <div class="p-8">
                <h3 class="font-normal text-5xl font-sans">98K</h3>
                <p class="font-bold">region office impact area highlights</p>
              </div>
              <div class="p-8">
                <h3 class="font-normal text-5xl font-sans">154K</h3>
                <p class="font-bold">region office impact area highlights</p>
              </div>
            </section>
            <section id="la" class="hub-data la-data">

            </section>
            <section id="ny" class="hub-data ny-data">

            </section>
            <section id="dc" class="hub-data dc-data">

            </section>
            <section id="atl" class="hub-data atl-data">

            </section>
          </div>
        </div>
            <div class="hubs-quote">
          <figure class="quote">
            <blockquote>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat voluptua.
            </blockquote>
            <figcaption>
              Kimberly Latimer-Neligan, LIIF President
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="white-info-area py-6 md:py-20">
    <div class="container">
      <div class="grid gap-8 md:grid-cols-12">
        <article class="md:col-span-5">
          <h2>GAP Child Care Center,<br /> Washington, D.C.</h2>
          <p>Enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt.</p>
          <a href="#" class="read-link">
            <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
            Read the full story
          </a>
        </article>
        <figure class="md:col-span-7">
          <img class="lazyload gradient-mask-img-b" data-src="{{ url('/assets/build/images/library.png') }}" alt="Four children sitting on a carpet listening while an adult shows them a book." data-expand="-10" />
          <blockquote class="text-xl mb-2">
            “Pat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis”
          </blockquote>
          <figcaption><b>Quote Attribution Here</b></figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="blue-info-area equity py-6 md:py-20">
    <div class="container">
      <div class="grid gap-8 md:grid-cols-12">
        <figure class="md:col-span-7">
          <img class="lazyload gradient-mask-img-b mb-8" data-src="{{ url('/assets/build/images/equity.png') }}" alt="Hand holding a piece of paper with the largest phrase saying Racial Equity" data-expand="-10" />
          <blockquote class="text-xl mb-2">
            “Pat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis”
          </blockquote>
          <figcaption><b>Quote Attribution Here</b></figcaption>
        </figure>
        <article class="md:col-span-5">
          <h2>EQUITY COMMITMENT AND IMPACT-RISK-PROFITABILITY</h2>
          <p>Enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt.</p>
          <a href="#">
            <span role="img" aria-label="arrow pointing to the right at a 45 degree angle">↗</span>
            Read the full story
          </a>
        </article>
      </div>
    </div>
  </section>

  <section class="white-info-area af-housing py-6 md:py-20">
    <div class="container">
      <div class="grid gap-8 md:gap-16 md:grid-cols-12">
        <article class="md:col-span-5">
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
        <figure class="md:col-span-7">
          <img class="lazyload gradient-mask-img-b" data-src="{{ url('/assets/build/images/vid-affordable-housing.png') }}" alt="Video thumbnail" data-expand="-10" />
          <blockquote class="text-xl mb-2">
            “I’m excited that this endeavor [Growing Diverse Housing Developers] gives me an opportunity to level the playing field and have access to the capital we need to redevelop our community.”
          </blockquote>
          <figcaption><b>Kathy Flanagan Payton, President and Chief Executive Officer Fifth Ward Community Redevelopment Corporation, Houston Texas</b></figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="blue-info-area early-care-education py-6 md:py-20">
    <div class="container">
      <div class="grid gap-8 md:gap-16 md:grid-cols-12">
        <figure class="md:col-span-7">
          <img class="lazyload gradient-mask-img-b" data-src="{{ url('/assets/build/images/early-care.png') }}" alt="Small child being carried on a womans back while both are laughing" data-expand="-10" />
          <blockquote class="text-xl mb-2">
            “Pat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis”
          </blockquote>
          <figcaption><b>Quote Attribution Here</b></figcaption>
        </figure>
        <article class="md:col-span-5">
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
      </div>
    </div>
  </section>

  <section class="about-partnerships py-6 md:py-20">
    <div class="container">
      <article>
        <h2>About Our Partnerships</h2>
        <div class="grid gap-8 md:gap-16 md:grid-cols-12">
          <div class="md:col-span-6">
            <strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</strong>
            <p> Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est. Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="md:col-span-6">
            <strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</strong>
            <p> Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est. Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="supporters pb-6 md:pb-20">
    <div class="container">
      <div class="supporters-info">
        <h2 id="suporter-title">Thanks to those who support our mission</h2>
        <div class="supporters-data">
          <ul aria-labelledby="suporter-title" class="sup-cat">
            <li><a href="#partnerships">Partnerships</a></li>
            <li><a href="#supporters">Supporters</a></li>
          </ul>
          <div class="lists">
            <section id="partnerships" class="partner-list">
              <ul class="!border-b-0">
                <li>609 Broad Street</li>
                <li>Amalgamated Bank</li>
                <li>Arnold Ventures</li>
                <li>Ballmer Group </li>
                <li>Bank of America Charitable Foundation</li>
                <li>Bank of America Community Development</li>
                <li>Bay Area Metropolitan Transportation Commission</li>
                <li>BBVA Compass Bank</li>
                <li>BDS 2012 Qualified Annuity Trust</li>
                <li>California Dept. of Housing and Community Development</li>
                <li>Calvert Impact Capital</li>
                <li>Capital One</li>
                <li>Cathay Bank Foundation</li>
                <li>Charles Schwab Bank</li>
                <li>CIT Bank</li>
                <li>CIT/OneWest Bank, N.A. (First Citizens Bank)</li>
                <li>City and County of San Francisco</li>
                <li>City First Bank</li>
              </ul>
            </section>
            <section id="supporters" class="partner-list">
              <ul class="!border-b-0">
                <li>609 Broad Street</li>
                <li>Amalgamated Bank</li>
                <li>Arnold Ventures</li>
                <li>Ballmer Group </li>
                <li>Bank of America Charitable Foundation</li>
                <li>Bank of America Community Development</li>
                <li>Bay Area Metropolitan Transportation Commission</li>
                <li>BBVA Compass Bank</li>
                <li>BDS 2012 Qualified Annuity Trust</li>
                <li>California Dept. of Housing and Community Development</li>
                <li>Calvert Impact Capital</li>
                <li>Capital One</li>
                <li>Cathay Bank Foundation</li>
                <li>Charles Schwab Bank</li>
                <li>CIT Bank</li>
                <li>CIT/OneWest Bank, N.A. (First Citizens Bank)</li>
                <li>City and County of San Francisco</li>
                <li>City First Bank</li>
              </ul>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="consolidated-financials py-6 md:py-20">
    <div class="container">
      <h2>Consolidated Financials</h2>
      <div class="table-info">
        <ul aria-labelledby="financials-title" class="table-cat" role="tablist">
          <li><a href="#partnerships-table" class="active">Partnerships</a></li>
          <li><a href="#supporters-table">Supporters</a></li>
        </ul>
        <div class="tables-container">
          <section id="partnerships-table">
            <table>
              <thead>
                <tr class="table-headers">
                  <th scope="row">As of June 30</th>
                  <th scope="col">2023</th>
                  <th scope="col">2022</th>
                  <th scope="col">2021</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Assets</th>
                  <td>-</td>
                  <td>46,613,979</td>
                  <td>35,468,369</td>
                </tr>
                <tr>
                  <th scope="row">Cash and</th>
                  <td>-</td>
                  <td>$53,842,160</td>
                  <td>$45,238,522</td>
                </tr>
                <tr>
                  <th scope="row">Notes receivable</th>
                  <td>-</td>
                  <td>$515,213,892</td>
                  <td>$470,922,421</td>
                </tr>
                <tr>
                  <th scope="row">Allowance for loan losses</th>
                  <td>-</td>
                  <td>($18,188,743)</td>
                  <td>($17,891,493)</td>
                </tr>
                <tr>
                  <th scope="row">Other assets</th>
                  <td>-</td>
                  <td>$29,401,316</td>
                  <td>$23,069,241</td>
                </tr>
                <tr class="total-row">
                  <th scope="row">Total Assets</th>
                  <td>-</td>
                  <td>$639,837,619</td>
                  <td>$576,150,842</td>
                </tr>
              </tbody>
            </table>
            <table>
              <thead>
                <tr class="table-headers">
                  <th scope="row">Liabilities</th>
                  <th scope="col">2023</th>
                  <th scope="col">2022</th>
                  <th scope="col">2021</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Notes payable</th>
                  <td>-</td>
                  <td>46,613,979</td>
                  <td>35,468,369</td>
                </tr>
                <tr>
                  <th scope="row">Fund held in trust</th>
                  <td>-</td>
                  <td>$53,842,160</td>
                  <td>$45,238,522</td>
                </tr>
                <tr>
                  <th scope="row">Other Liabilities</th>
                  <td>-</td>
                  <td>$515,213,892</td>
                  <td>$470,922,421</td>
                </tr>
                <tr class="total-row">
                  <th scope="row"></th>
                  <td>-</td>
                  <td>$639,837,619</td>
                  <td>$576,150,842</td>
                </tr>
              </tbody>
            </table>
            <table>
              <thead>
                <tr class="table-headers">
                  <th scope="row">Net Assets</th>
                  <th scope="col">2023</th>
                  <th scope="col">2022</th>
                  <th scope="col">2021</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Without donor</th>
                  <td>-</td>
                  <td>46,613,979</td>
                  <td>35,468,369</td>
                </tr>
                <tr>
                  <th scope="row">With donor</th>
                  <td>-</td>
                  <td>$53,842,160</td>
                  <td>$45,238,522</td>
                </tr>
                <tr>
                  <th scope="row">Total Net Assets</th>
                  <td>-</td>
                  <td>$515,213,892</td>
                  <td>$470,922,421</td>
                </tr>
                <tr>
                <tr class="total-row">
                  <th scope="row"></th>
                  <td>-</td>
                  <td>$639,837,619</td>
                  <td>$576,150,842</td>
                </tr>
              </tbody>
            </table>
          </section>
          <section id="supporters-table">
            <table>
              <thead>
                <tr class="table-headers">
                  <th scope="row">2nd Table!</th>
                  <th scope="col">2023</th>
                  <th scope="col">2022</th>
                  <th scope="col">2021</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Assets</th>
                  <td>-</td>
                  <td>46,613,979</td>
                  <td>35,468,369</td>
                </tr>
                <tr>
                  <th scope="row">Cash and</th>
                  <td>-</td>
                  <td>$53,842,160</td>
                  <td>$45,238,522</td>
                </tr>
                <tr>
                  <th scope="row">Notes receivable</th>
                  <td>-</td>
                  <td>$515,213,892</td>
                  <td>$470,922,421</td>
                </tr>
                <tr>
                  <th scope="row">Allowance for loan losses</th>
                  <td>-</td>
                  <td>($18,188,743)</td>
                  <td>($17,891,493)</td>
                </tr>
                <tr>
                  <th scope="row">Other assets</th>
                  <td>-</td>
                  <td>$29,401,316</td>
                  <td>$23,069,241</td>
                </tr>
                <tr class="total-row">
                  <th scope="row">Total Assets</th>
                  <td>-</td>
                  <td>$639,837,619</td>
                  <td>$576,150,842</td>
                </tr>
              </tbody>
            </table>
            <table>
              <thead>
                <tr class="table-headers">
                  <th scope="row">Liabilities</th>
                  <th scope="col">2023</th>
                  <th scope="col">2022</th>
                  <th scope="col">2021</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Notes payable</th>
                  <td>-</td>
                  <td>46,613,979</td>
                  <td>35,468,369</td>
                </tr>
                <tr>
                  <th scope="row">Fund held in trust</th>
                  <td>-</td>
                  <td>$53,842,160</td>
                  <td>$45,238,522</td>
                </tr>
                <tr>
                  <th scope="row">Other Liabilities</th>
                  <td>-</td>
                  <td>$515,213,892</td>
                  <td>$470,922,421</td>
                </tr>
                <tr class="total-row">
                  <th scope="row"></th>
                  <td>-</td>
                  <td>$639,837,619</td>
                  <td>$576,150,842</td>
                </tr>
              </tbody>
            </table>
            <table>
              <thead>
                <tr class="table-headers">
                  <th scope="row">Net Assets</th>
                  <th scope="col">2023</th>
                  <th scope="col">2022</th>
                  <th scope="col">2021</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Without donor</th>
                  <td>-</td>
                  <td>46,613,979</td>
                  <td>35,468,369</td>
                </tr>
                <tr>
                  <th scope="row">With donor</th>
                  <td>-</td>
                  <td>$53,842,160</td>
                  <td>$45,238,522</td>
                </tr>
                <tr>
                  <th scope="row">Total Net Assets</th>
                  <td>-</td>
                  <td>$515,213,892</td>
                  <td>$470,922,421</td>
                </tr>
                <tr>
                <tr class="total-row">
                  <th scope="row"></th>
                  <td>-</td>
                  <td>$639,837,619</td>
                  <td>$576,150,842</td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section class="bodl py-6 md:py-20">
    <div class="container">
    <h2 id="directors-leadership">Board of Directors + Leadership</h2>
    <div>
      <h3 class="font-sans font-semibold">Officers</h3>
      <div class="officers">
        <div>
          <strong class="block">Reymundo Ocañas, Chair</strong>
          <span>
            Executive Vice President, Director of Community Development Banking, Corporate Responsibility Group, PNC Bank
          </span>
        </div>
        <div>
          <strong class="block">Jessica Sager, Vice Chair</strong>
          <span>CEO, All Our Kin, Inc.</span>
        </div>
        <div>
          <strong class="block">Russell J. Bruemmer, Secretary</strong>
          <span>Retired Partner, Wilmer Cutler Pickering Hale and Dorr</span>
        </div>
        <div>
          <strong class="block">Dionne Nelson, Treasurer</strong>
          <span>President & CEO, Laurel Street</span>
        </div>
      </div>
      <div class="other-staff">
        <ul aria-labelledby="directors-leadership" class="dir-staff" role="tablist">
          <li><a href="#directors" class="active" aria-selected="true">Directors</a></li>
          <li><a href="#senior-staff">Senior Staff</a></li>
        </ul>
        <div class="staff-list">
          <section id="directors">
            <div>
              <strong class="block">Margaret Chinwe Anadu</strong>
              <span>Senior Partner, The Vistria Group</span>
            </div>
            <div>
              <strong class="block">Tawanna A. Black</strong>
              <span>Founder and CEO, Center for Economic Inclusion</span>
            </div>
            <div>
              <strong class="block">Donna Gambrell</strong>
              <span>
                President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
              </span>
            </div>
            <div>
              <strong class="block">Eileen Fitzgerald</strong>
              <span>
                Founder and Principal, ThruSight
              </span>
            </div>
            <div>
              <strong class="block">David Fleming, M.D</strong>
              <span>
                Distinguished Fellow, Trust for America’s Health
              </span>
            </div>
            <div>
              <strong class="block">Margaret Chinwe Anadu</strong>
              <span>
                Senior Partner, The Vistria Group
              </span>
            </div>
            <div>
              <strong class="block">Tawanna A. Black</strong>
              <span>
                Founder and CEO, Center for Economic Inclusion
              </span>
            </div>
            <div>
              <strong class="block">Donna Gambrell</strong>
              <span>
                President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
              </span>
            </div>
            <div>
              <strong class="block">Eileen Fitzgerald</strong>
              <span>
                Founder and Principal, ThruSight
              </span>
            </div>
            <div>
              <strong class="block">David Fleming, M.D</strong>
              <span>
                Distinguished Fellow, Trust for America’s Health
              </span>
            </div>
            <div>
              <strong class="block">Margaret Chinwe Anadu</strong>
              <span>
                Senior Partner, The Vistria Group
              </span>
            </div>
            <div>
              <strong class="block">Tawanna A. Black</strong>
              <span>
                Founder and CEO, Center for Economic Inclusion
              </span>
            </div>
            <div>
              <strong class="block">Donna Gambrell</strong>
              <span>
                President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
              </span>
            </div>
          </section>
          <section id="senior-staff">
            <div>
              <strong class="block">SECOND TAB</strong>
              <span>
                Senior Partner, The Vistria Group
              </span>
            </div>
            <div>
              <strong class="block">Tawanna A. Black</strong>
              <span>
                Founder and CEO, Center for Economic Inclusion
              </span>
            </div>
            <div>
              <strong class="block">Donna Gambrell</strong>
              <span>
                President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
              </span>
            </div>
            <div>
              <strong class="block">Eileen Fitzgerald</strong>
              <span>
                Founder and Principal, ThruSight
              </span>
            </div>
            <div>
              <strong class="block">David Fleming, M.D</strong>
              <span>
                Distinguished Fellow, Trust for America’s Health
              </span>
            </div>
            <div>
              <strong class="block">Margaret Chinwe Anadu</strong>
              <span>
                Senior Partner, The Vistria Group
              </span>
            </div>
            <div>
              <strong class="block">Tawanna A. Black</strong>
              <span>
                Founder and CEO, Center for Economic Inclusion
              </span>
            </div>
            <div>
              <strong class="block">Donna Gambrell</strong>
              <span>
                President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
              </span>
            </div>
            <div>
              <strong class="block">Eileen Fitzgerald</strong>
              <span>
                Founder and Principal, ThruSight
              </span>
            </div>
            <div>
              <strong class="block">David Fleming, M.D</strong>
              <span>
                Distinguished Fellow, Trust for America’s Health
              </span>
            </div>
            <div>
              <strong class="block">Margaret Chinwe Anadu</strong>
              <span>
                Senior Partner, The Vistria Group
              </span>
            </div>
            <div>
              <strong class="block">Tawanna A. Black</strong>
              <span>
                Founder and CEO, Center for Economic Inclusion
              </span>
            </div>
            <div>
              <strong class="block">Donna Gambrell</strong>
              <span>
                President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
              </span>
            </div>
          </section>

        </div>

      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-content py-8 md:py-16">
          <h2 class="footer-msg mb-8">
              Join us in our work building communities of opportunity, equity and well-being across the nation!
          </h2>

          <div class="grid gap-8 grid-cols-12">

            <div class="col-span-12 md:col-span-2 lg:col-span-2">
              <img src="{{ url('/assets/build/images/logo-liif.svg') }}" class="footer-liif-logo mx-auto md:ml-0" alt="Low Income Investement Fund">
            </div>

            <div class="col-span-12 md:col-span-10 lg:col-span-7">
              <div class="newsletter-grp">
                <h3 class="mt-0 mb-4">Sign up for LIIF's monthly newsletter</h3>
                <form action="https://liifund.us13.list-manage.com/subscribe/post?u=a27878232e2220f64b0fb32cb&amp;id=2f9987be46" method="post">
                  <label for="mce-email">Your email</label>
                  <input type="email" name="EMAIL" id="mce-email" required />
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_a27878232e2220f64b0fb32cb_1a7304a993" tabindex="-1" value="">
                  </div>
                  <input type="submit" value="Subscribe" />
                </form>
              </div>

              <address class="locations">
                <div class="leading-loose">
                  <span class="block">Headquarters:</span>
                  <span class="block">49 Stevenson St., Suite 300</span>
                  <span class="block">San Francisco, CA 94105</span>
                </div>
                <div class="leading-loose">
                  <span class="block">Other Regional Offices:</span>
                  <span class="block">Los Angeles | New York</span>
                  <span class="block">Washington, D.C. | Atlanta</span>
                </div>
              </address>
            </div>
            <div class="col-span-12 md:col-span-12 lg:col-span-3">
              <div class="footer-socials mt-20">
                  <ul>
                      <li><a href="https://www.linkedin.com/company/low-income-investment-fund/mycompany"><img src="{{ url('/assets/build/images/Icon-footer-linkedin.svg') }}" alt="LinkedIn"></a></li>
                      <li><a href="https://twitter.com/Liifund"><img src="{{ url('/assets/build/images/Icon-footer-twitter.svg') }}" alt="X"></a></li>
                      <li><a href="https://www.facebook.com/liifund"><img src="{{ url('/assets/build/images/Icon-footer-facebook.svg') }}" alt="Facebook"></a></li>
                      <li><a href="https://www.youtube.com/user/liifund"><img src="{{ url('/assets/build/images/Icon-footer-youtube.svg') }}" alt="YouTube"></a></li>
                  </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="bottom-row">
      <p>Copyright &copy; 2023 Low Income Investment Fund, 2023 Annual Impact Report</p>
    </div>
  </footer>
</div>
@endsection
