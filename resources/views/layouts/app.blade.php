<!DOCTYPE html>
<html lang="en">
  @include('partials.head')
<body>

<header>
    @include('partials.navbar')
</header>

<main>
    @yield('main-content')
</main>

{{-- <footer>
    <div class="container_top_footer">
        <div class="container_top">
          <ul>
            <li v-for="card in cards">
              <a :href="card.url">
                <img :src="card.image" alt="" />
                <span>{{ card.text }}</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="container_center_footer">
        <div class="container_center">
          <div class="container_left">
            <div>
              <h3>DC COMICS</h3>
              <ul>
                <li v-for="linkDc in linksDc">
                  <a :href="linkDc.url">{{ linkDc.text }} </a>
                </li>
              </ul>
              <h3>SHOP</h3>
              <ul>
                <li v-for="shop in shopsDc">
                  <a :href="shop.url">{{ shop.text }} </a>
                </li>
              </ul>
            </div>
            <div>
              <h3>DC</h3>
              <ul>
                <li v-for="Element in dc">
                  <a :href="Element.url">{{ Element.text }} </a>
                </li>
              </ul>
            </div>
            <div>
              <h3>Sites</h3>
              <ul>
                <li v-for="site in sites">
                  <a :href="site.url">{{ site.text }} </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="container_right">
            <img src="/dc-logo-bg.png" alt="" />
          </div>
        </div>
      </div>
      <div class="container_bottom_footer">
        <div class="container_bottom">
          <div class="sign_up">SIGN-UP NOW</div>
          <div class="icon_social">
            <h3>FOLLOW US</h3>
            <ul>
              <li v-for="social in socials">
                <a :href="social.url"
                  ><img :src="social.image" :alt="social.name"
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

</footer> --}}
    
</body>
</html>