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
    <div class="investments-data">
      <h2>$5Billion</h2>
      <p class="investments-message">LIIF is driving $5 billion in investments to advance racial equity (2020-2030)</p>
      <div class="progress-bar">
        <p>43%</p>
        <p>reached by 7-30-2023</p>
      </div>
      <h3 id="tabs-title">STRATEGIC HUBS ACROSS THE U.S.</h3>
      <div class="us-data">
        <ul aria-labelledby="tabs-title" class="hubs">
          <li><a href="#sf">
            San Francisco </br>
            Western Region (d)
          </a></li>
          <li><a href="#la">
            Los Angeles </br>
            Western Region (h)
          </a></li>
          <li><a href="#ny">
            New York </br>
            Northeast Region
          </a></li>
          <li><a href="#dc">
            Washington, D.C. </br>
            Mid-Atlantic Region
          </a></li>
          <li><a href="#atl">
            Atlanta </br>
            Southeast Region
          </a></li>
        </ul>
        <div class="hub-cards">
          <section id="sf" class="active-card">
            <div>
              <h3>123K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>634K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>98K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>001K</h3>
              <p>region office impact area highlights</p>
            </div>
          </section>
          <section id="la" class="la-data">
            <div>
              <h3>123K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>634K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>98K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>002K</h3>
              <p>region office impact area highlights</p>
            </div>
          </section>
          <section id="ny" class="ny-data">
            <div>
              <h3>123K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>634K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>98K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>003K</h3>
              <p>region office impact area highlights</p>
            </div>
          </section>
          <section id="dc" class="dc-data">
            <div>
              <h3>123K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>634K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>98K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>004K</h3>
              <p>region office impact area highlights</p>
            </div>
          </section>
          <section id="atl" class="atl-data">
            <div>
              <h3>123K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>634K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>98K</h3>
              <p>region office impact area highlights</p>
            </div>
            <div>
              <h3>005K</h3>
              <p>region office impact area highlights</p>
            </div>
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

  <section class="supporters">
    <div class="supporters-info">
      <h2 id="suporter-title">Thanks to those who support our mission</h2>
    <div class="supporters-data">
      <ul aria-labelledby="suporter-title" class="sup-cat">
        <li><a href="#partnerships">Partnerships</a></li>
        <li><a href="#supporters">Supporters</a></li>
      </ul>
      <div class="lists">
        <section id="partnerships" class="partner-list">
          <p>609 Broad Street</p>
          <p>Amalgamated Bank</p>
          <p>Arnold Ventures</p>
          <p>Ballmer Group </p>
          <p>Bank of America Charitable Foundation</p>
          <p>Bank of America Community Development</p>
          <p>Bay Area Metropolitan Transportation Commission</p>
          <p>BBVA Compass Bank</p>
          <p>BDS 2012 Qualified Annuity Trust</p>
          <p>California Dept. of Housing and Community Development</p>
          <p>Calvert Impact Capital</p>
          <p>Capital One</p>
          <p>Cathay Bank Foundation</p>
          <p>Charles Schwab Bank</p>
          <p>CIT Bank</p>
          <p>CIT/OneWest Bank, N.A. (First Citizens Bank)</p>
          <p>City and County of San Francisco</p>
          <p>City First Bank</p>
        </section>
        <section id="supporters" class="supporter-list">
          <p>Lift to Rise</p>
          <p>LOCUS Impact Ivesting</p>
          <p>Marisla Foundation</p>
        </section>
      </div>
    </div>
    </div>
  </section>

  <section class="consolidated-financials">
    <h2>Consolidated Financials</h2>
    <h3 id="financials-title">Per Fiscal Year 2023 audited financials</h3>
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
  </section>

  <section class="bodl">
    <h2 id="directors-leadership">Board of Directors + Leadership</h2>
    <div>
    <h3>Officers</h3>
    <div class="officers">
      <div>
        <h4>Reymundo Ocañas, Chair</h4>
        <p>
          Executive Vice President, Director of Community Development Banking, Corporate Responsibility Group, PNC Bank
        </p>
      </div>
      <div>
        <h4>Jessica Sager, Vice Chair</h4>
        <p>
          CEO, All Our Kin, Inc.
        </p>
      </div>
      <div>
        <h4>Russell J. Bruemmer, Secretary</h4>
        <p>
          Retired Partner, Wilmer Cutler Pickering Hale and Dorr
        </p>
      </div>
      <div>
        <h4>Dionne Nelson, Treasurer</h4>
        <p>
          President & CEO, Laurel Street
        </p>
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
            <h4>Margaret Chinwe Anadu</h4>
            <p>
              Senior Partner, The Vistria Group
            </p>
          </div>
          <div>
            <h4>Tawanna A. Black</h4>
            <p>
              Founder and CEO, Center for Economic Inclusion
            </p>
          </div>
          <div>
            <h4>Donna Gambrell</h4>
            <p>
              President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
            </p>
          </div>
          <div>
            <h4>Eileen Fitzgerald</h4>
            <p>
              Founder and Principal, ThruSight
            </p>
          </div>
          <div>
            <h4>David Fleming, M.D</h4>
            <p>
              Distinguished Fellow, Trust for America’s Health
            </p>
          </div>
          <div>
            <h4>Margaret Chinwe Anadu</h4>
            <p>
              Senior Partner, The Vistria Group
            </p>
          </div>
          <div>
            <h4>Tawanna A. Black</h4>
            <p>
              Founder and CEO, Center for Economic Inclusion
            </p>
          </div>
          <div>
            <h4>Donna Gambrell</h4>
            <p>
              President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
            </p>
          </div>
          <div>
            <h4>Eileen Fitzgerald</h4>
            <p>
              Founder and Principal, ThruSight
            </p>
          </div>
          <div>
            <h4>David Fleming, M.D</h4>
            <p>
              Distinguished Fellow, Trust for America’s Health
            </p>
          </div>
          <div>
            <h4>Margaret Chinwe Anadu</h4>
            <p>
              Senior Partner, The Vistria Group
            </p>
          </div>
          <div>
            <h4>Tawanna A. Black</h4>
            <p>
              Founder and CEO, Center for Economic Inclusion
            </p>
          </div>
          <div>
            <h4>Donna Gambrell</h4>
            <p>
              President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
            </p>
          </div>
        </section>
        <section id="senior-staff">
          <div>
            <h4>SECOND TAB</h4>
            <p>
              Senior Partner, The Vistria Group
            </p>
          </div>
          <div>
            <h4>Tawanna A. Black</h4>
            <p>
              Founder and CEO, Center for Economic Inclusion
            </p>
          </div>
          <div>
            <h4>Donna Gambrell</h4>
            <p>
              President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
            </p>
          </div>
          <div>
            <h4>Eileen Fitzgerald</h4>
            <p>
              Founder and Principal, ThruSight
            </p>
          </div>
          <div>
            <h4>David Fleming, M.D</h4>
            <p>
              Distinguished Fellow, Trust for America’s Health
            </p>
          </div>
          <div>
            <h4>Margaret Chinwe Anadu</h4>
            <p>
              Senior Partner, The Vistria Group
            </p>
          </div>
          <div>
            <h4>Tawanna A. Black</h4>
            <p>
              Founder and CEO, Center for Economic Inclusion
            </p>
          </div>
          <div>
            <h4>Donna Gambrell</h4>
            <p>
              President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
            </p>
          </div>
          <div>
            <h4>Eileen Fitzgerald</h4>
            <p>
              Founder and Principal, ThruSight
            </p>
          </div>
          <div>
            <h4>David Fleming, M.D</h4>
            <p>
              Distinguished Fellow, Trust for America’s Health
            </p>
          </div>
          <div>
            <h4>Margaret Chinwe Anadu</h4>
            <p>
              Senior Partner, The Vistria Group
            </p>
          </div>
          <div>
            <h4>Tawanna A. Black</h4>
            <p>
              Founder and CEO, Center for Economic Inclusion
            </p>
          </div>
          <div>
            <h4>Donna Gambrell</h4>
            <p>
              President and CEO, Appalachian Community Capital; Former Director, CDFI Fund
            </p>
          </div>
        </section>

      </div>

    </div>
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
