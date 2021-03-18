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
    <!-- <p>Need COPY!!! on this website has not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease.</p> -->
    <p>© All Rights Reserved | <a href="#" class="openPopup" data-popup="terms">Terms & Conditions</a> | <a href="#" class="openPopup" data-popup="privacy">Privacy Policy</a></p>
    <!-- <p>© Need COPY!!! . All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="openPopup" data-popup="terms">Terms & Conditions</a> | <a href="#" class="openPopup" data-popup="privacy">Privacy Policy</a> | <a href="#" class="openPopup" data-popup="citations">Click here for citations</a>  |  9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212</p> -->
  </div>
</section>

<template id="terms"><h1 class="section-title">Website Terms and Conditions of Use</h1> <h2>1. Terms</h2> <p>By accessing this Website, accessible from ocmd.co, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p> <h2>2. Use License</h2> <p>Permission is granted to temporarily download one copy of the materials on OCMD's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p> <ul> <li>modify or copy the materials;</li> <li>use the materials for any commercial purpose or for any public display;</li> <li>attempt to reverse engineer any software contained on OCMD's Website;</li> <li>remove any copyright or other proprietary notations from the materials; or</li> <li>transferring the materials to another person or "mirror" the materials on any other server.</li> </ul> <p>This will let OCMD to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format. These Terms of Service has been created with the help of the <a href="https://www.termsofservicegenerator.net">Terms Of Service Generator</a> and the <a href="https://www.generateprivacypolicy.com">Privacy Policy Generator</a>.</p> <h2>3. Disclaimer</h2> <p>All the materials on OCMD’s Website are provided "as is". OCMD makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, OCMD does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p> <h2>4. Limitations</h2> <p>OCMD or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on OCMD’s Website, even if OCMD or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p> <h2>5. Revisions and Errata</h2> <p>The materials appearing on OCMD’s Website may include technical, typographical, or photographic errors. OCMD will not promise that any of the materials in this Website are accurate, complete, or current. OCMD may change the materials contained on its Website at any time without notice. OCMD does not make any commitment to update the materials.</p> <h2>6. Links</h2> <p>OCMD has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by OCMD of the site. The use of any linked website is at the user’s own risk.</p> <h2>7. Site Terms of Use Modifications</h2> <p>OCMD may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p> <h2>8. Your Privacy</h2> <p>Please read our Privacy Policy.</p> <h2>9. Governing Law</h2> <p>Any claim related to OCMD's Website shall be governed by the laws of us without regards to its conflict of law provisions.</p> </template>
<template id="privacy"><h1 class="section-title">Privacy Policy</h1> <p>This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from ocmd.co (the “Site”).</p> <h3>Personal information we collect</h3> <p>When you visit the Site, we automatically collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device. Additionally, as you browse the Site, we collect information about the individual web pages or products that you view, what websites or search terms referred you to the Site, and information about how you interact with the Site. We refer to this automatically-collected information as “Device Information”. We collect Device Information using the following technologies: – “Cookies” are data files that are placed on your device or computer and often include an anonymous unique identifier. For more information about cookies, and how to disable cookies, visit http://www.allaboutcookies.org. – “Log files” track actions occurring on the Site, and collect data including your IP address, browser type, Internet service provider, referring/exit pages, and date/time stamps. – “Web beacons”, “tags”, and “pixels” are electronic files used to record information about how you browse the Site. – Additionally when you make a purchase or attempt to make a purchase through the Site, we collect certain information from you, including your name, billing address, shipping address, payment information (including credit card numbers), email address, and phone number. We refer to this information as “Order Information”. When we talk about “Personal Information” in this Privacy Policy, we are talking both about Device Information and Order Information.</p> <h3>How do we use your personal information?</h3> <p>We use the Order Information that we collect generally to fulfill any orders placed through the Site (including processing your payment information, arranging for shipping, and providing you with invoices and/or order confirmations). Additionally, we use this Order Information to: – Communicate with you; – Screen our orders for potential risk or fraud; and – When in line with the preferences you have shared with us, provide you with information or advertising relating to our products or services. We use the Device Information that we collect to help us screen for potential risk and fraud (in particular, your IP address), and more generally to improve and optimize our Site (for example, by generating analytics about how our customers browse and interact with the Site, and to assess the success of our marketing and advertising campaigns).</p> <h3>Sharing you personal Information</h3> <p>We share your Personal Information with third parties to help us use your Personal Information, as described above. For example, we use Shopify to power our online store–you can read more about how Shopify uses your Personal Information here: https://www.shopify.com/legal/privacy. We also use Google Analytics to help us understand how our customers use the Site — you can read more about how Google uses your Personal Information here: https://www.google.com/intl/en/policies/privacy/. You can also opt-out of Google Analytics here: https://tools.google.com/dlpage/gaoptout. Finally, we may also share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise protect our rights.</p> <h3>Behavioural advertising</h3> <p>As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications we believe may be of interest to you. For more information about how targeted advertising works, you can visit the Network Advertising Initiative’s (“NAI”) educational page at http://www.networkadvertising.org/understanding-online-advertising/how-does-it-work. You can opt out of targeted advertising by using the links below: – Facebook: https://www.facebook.com/settings/?tab=ads – Google: https://www.google.com/settings/ads/anonymous – Bing: https://advertise.bingads.microsoft.com/en-us/resources/policies/personalized-ads – Additionally, you can opt out of some of these services by visiting the Digital Advertising Alliance’s opt-out portal at: http://optout.aboutads.info/.</p> <h3>Do not track</h3> <p>Please note that we do not alter our Site’s data collection and use practices when we see a Do Not Track signal from your browser.</p> <h3>Your rights</h3> <p>If you are a European resident, you have the right to access personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below. Additionally, if you are a European resident we note that we are processing your information in order to fulfill contracts we might have with you (for example if you make an order through the Site), or otherwise to pursue our legitimate business interests listed above. Additionally, please note that your information will be transferred outside of Europe, including to Canada and the United States.</p> <h3>Data retention</h3> <p>/* When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete this information. */</p> <h3>Changes</h3> <p>We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.</p> <h3>Minors</h3> <p>By using our website, you (the visitor) agree to allow third parties to process your IP address, in order to determine your location for the purpose of currency conversion. You also agree to have that currency stored in a session cookie in your browser (a temporary cookie which gets automatically removed when you close your browser). We do this in order for the selected currency to remain selected and consistent when browsing our website so that the prices can convert to your (the visitor) local currency.</p> <h3>Contact us</h3> <p>For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e‑mail at support@ocmd.co</p> </template>
<!-- <template id="citations"><h2>Citations</h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel alias hic, quia quo quas rem veritatis provident, sint a est, molestiae, temporibus. Non, itaque molestiae quam debitis ut labore, tenetur perferendis odit aliquid ipsum alias molestias, ab magni sint, temporibus tempora? Suscipit maxime, officia quidem voluptate voluptatum tempore odio odit dolore, magnam vero natus saepe necessitatibus laboriosam reiciendis. Laudantium cumque, necessitatibus soluta nihil ex quaerat a officia dicta numquam optio aliquid placeat odit, reiciendis, eius, quam voluptas ab! Autem accusamus deleniti, impedit repellat iure neque eveniet, voluptatibus dicta vero minima laudantium maxime dolorum maiores saepe numquam, laboriosam quo dignissimos quaerat.</template> -->

<?php get_template_part( 'partials/block', 'popup' ); ?>

<?php get_footer();