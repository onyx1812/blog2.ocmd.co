<?php
/*
 * Template Name: Blog FB
 */
get_header(); ?>

<section class="content">
  <div class="container">
    <div class="video-wrap">
      <div class="row">
        <div class="col-md-9">
          <div id="vidalytics_embed_<?php the_field('video'); ?>" style="width: 100%; position:relative; padding-top: 56.25%;"></div>
          <script type="text/javascript">
          (function (v, i, d, a, l, y, t, c, s) {
          y='_'+d.toLowerCase();c=d+'L';if(!v[d]){v[d]={};}if(!v[c]){v[c]={};}if(!v[y]){v[y]={};}var vl='Loader',vli=v[y][vl],vsl=v[c][vl + 'Script'],vlf=v[c][vl + 'Loaded'],ve='Embed';
          if (!vsl){vsl=function(u,cb){
          if(t){cb();return;}s=i.createElement("script");s.type="text/javascript";s.async=1;s.src=u;
          if(s.readyState){s.onreadystatechange=function(){if(s.readyState==="loaded"||s.readyState=="complete"){s.onreadystatechange=null;vlf=1;cb();}};}else{s.onload=function(){vlf=1;cb();};}
          i.getElementsByTagName("head")[0].appendChild(s);
          };}
          vsl(l+'loader.min.js',function(){if(!vli){var vlc=v[c][vl];vli=new vlc();}vli.loadScript(l+'player.min.js',function(){var vec=v[d][ve];t=new vec();t.run(a);});});
          })(window, document, 'Vidalytics', 'vidalytics_embed_<?php the_field('video'); ?>', 'https://fast.vidalytics.com/embeds/isuMyTf1/<?php the_field('video'); ?>/');
          </script>
          <a href="<?php the_field('link'); ?>" class="btn-video">NEXT STEP</a>
        </div>
        <div class="col-md-3">
          <img src="<?php echo IMG; ?>/dr_tess.png" alt="">
          <h3>Dr. Tess Mauricio</h3>
          <p>Dr. Tess Mauricio is a Board-Certified Dermatologist and an internationally recognized cosmetic surgeon, regenerative aesthetics and women’s health pioneer. She is the founder of M Beauty Clinic by Dr Tess based in Southern California and is a favorite medical expert on TV with regular network appearances on NBC’s California Live, The Dr Oz Show, The Talk, The Real, Dr Phil, and The Rachael Ray Show.</p>
        </div>
      </div>
    </div>
    <ul class="row steps">
      <li class="col-sm-6">
        <img src="<?php echo IMG; ?>/icon1.png" alt="">
        The groundbreaking formula that revives your skin, turns back the clock on aging and smooths out wrinkles.
      </li>
      <li class="col-sm-6">
        <img src="<?php echo IMG; ?>/icon2.png" alt="">
        The “time machine” procedure Dr. Tess brings into your home at a fraction of the price A-List celebrity clients pay.
      </li>
      <li class="col-sm-6">
        <img src="<?php echo IMG; ?>/icon3.png" alt="">
        The #1 thing everyone should avoid to keep your skin looking beautiful, plump, vibrant and elastic.
      </li>
      <li class="col-sm-6">
        <img src="<?php echo IMG; ?>/icon4.png" alt="">
        The simple reason those expensive,  “high-end” cosmetics are no better than a store brand knock off.
      </li>
    </ul>
    <div class="description">
      <h2>OCMD Rejuvenation Complex Cream</h2>
      <p>Formulated by Top MD’s for your neck and face, this unique cream creates dramatically younger skin and restores the firmness, volume & elasticity you’ve been looking for.</p>
      <div class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-6">
              <img src="<?php echo IMG; ?>/desc-01.png" alt="">
              <h5>Tighten loose, sagging skin</h5>
            </div>
            <div class="col-6">
              <img src="<?php echo IMG; ?>/desc-02.png" alt="">
              <h5>Add volume, thickness to thin papery skin</h5>
            </div>
            <div class="col-6">
              <img src="<?php echo IMG; ?>/desc-03.png" alt="">
              <h5>Helps with fine lines, wrinkles and "crow's feet"</h5>
            </div>
            <div class="col-6">
              <img src="<?php echo IMG; ?>/desc-04.png" alt="">
              <h5>100% Dr. Tess Approved</h5>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <img src="<?php echo IMG; ?>/desc-05.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fb-footer">
  <div class="container">
    <p>Need COPY!!! on this website has not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease.</p>
    <p>© Need COPY!!! . All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="openPopup" data-popup="terms">Terms & Conditions</a> | <a href="#" class="openPopup" data-popup="privacy">Privacy Policy</a> | <a href="#" class="openPopup" data-popup="citations">Click here for citations</a>  |  9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212</p>
  </div>
</section>

<template id="terms"><h2>Terms</h2>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Sint quisquam, repudiandae deleniti iste iusto ex provident accusamus voluptatibus eum veritatis aut dignissimos dolor dicta sapiente nesciunt incidunt non maxime, saepe quam unde exercitationem dolores facere. Aliquid cupiditate sit quibusdam maxime cum tenetur, aspernatur quasi minima ullam modi. Illum vel iste explicabo praesentium molestias consequatur cupiditate sint eos blanditiis voluptatibus nihil quod, molestiae eveniet debitis optio est magni iure maxime laborum fugiat quasi placeat! Animi dolorum est deleniti provident repellendus doloremque quas voluptatibus, sunt, sint. Sit eos natus nam exercitationem in reprehenderit error vero eligendi voluptatibus amet voluptates inventore, dolores modi?</template>
<template id="privacy"><h2>Privacy</h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel alias hic, quia quo quas rem veritatis provident, sint a est, molestiae, temporibus. Non, itaque molestiae quam debitis ut labore, tenetur perferendis odit aliquid ipsum alias molestias, ab magni sint, temporibus tempora? Suscipit maxime, officia quidem voluptate voluptatum tempore odio odit dolore, magnam vero natus saepe necessitatibus laboriosam reiciendis. Laudantium cumque, necessitatibus soluta nihil ex quaerat a officia dicta numquam optio aliquid placeat odit, reiciendis, eius, quam voluptas ab! Autem accusamus deleniti, impedit repellat iure neque eveniet, voluptatibus dicta vero minima laudantium maxime dolorum maiores saepe numquam, laboriosam quo dignissimos quaerat.</template>
<template id="citations"><h2>Citations</h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel alias hic, quia quo quas rem veritatis provident, sint a est, molestiae, temporibus. Non, itaque molestiae quam debitis ut labore, tenetur perferendis odit aliquid ipsum alias molestias, ab magni sint, temporibus tempora? Suscipit maxime, officia quidem voluptate voluptatum tempore odio odit dolore, magnam vero natus saepe necessitatibus laboriosam reiciendis. Laudantium cumque, necessitatibus soluta nihil ex quaerat a officia dicta numquam optio aliquid placeat odit, reiciendis, eius, quam voluptas ab! Autem accusamus deleniti, impedit repellat iure neque eveniet, voluptatibus dicta vero minima laudantium maxime dolorum maiores saepe numquam, laboriosam quo dignissimos quaerat.</template>

<?php get_template_part( 'partials/block', 'popup' ); ?>

<?php get_footer();