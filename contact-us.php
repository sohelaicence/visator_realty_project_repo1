<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include 'include_stylesheet.php' ?>;

    <link rel="stylesheet" href="./css/contact.css">

    <title>Contact Us</title>
  </head>

  <body>


    <!-- Header Section Started Here -->
      <div id="nav-placeholder"></div>
      <script>
        $.get("header.php", function(data) {
          $("#nav-placeholder").replaceWith(data);
        });
      </script>
    <!-- Header Section Ended Here -->



    <div class="contact-section-1 text-center">
      <div class="fsize-46">Contact Us</div>
      <div class="fsize-18-1">Have any questions? We're happy to answer.</div>
    </div>
    <div class="contact-hero"></div>

    <!-- section-2 starts -->
    <div class="contact-section-2">
      <div class="row contact-section-2-row">
        <div
          class="col-lg-6 col-md-6 col-12"
          style="
            background-color: #f1f1f1;
          "
        >
          <div class="form-space">
            <div class="text-center">
              <div class="fsize-32" style="margin: 10px 0 30px">
                WHAT CAN WE HELP YOU WITH? 
              </div>
              <div class="contact-border-top"></div>
              <div class="fsize-20" style="margin: 24px 0 35px 0">
                CONTACT DETAILS
              </div>
            </div>

            <div>
              <div class="row">
                <div class="col-12 py-3">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Full Name"
                  />
                </div>

                <div class="col-12 py-3">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Email"
                  />
                </div>

                <div class="col-12 py-3 my-4">
                  <div class="row custom-row" style="margin: 0;">
                    <div class="col-4"  style="padding-right: 10px;">

                      <select name="" id="" class="country-form-control">
                        <option value="+93">Afghanistan +93</option>
                        <option value="+355">Albania +355</option>
                        <option value="+213">Algeria +213</option>
                        <option value="+684">American Samoa +684</option>
                        <option value="+376">Andorra +376</option>
                        <option value="+244">Angola +244</option>
                        <option value="+1-268">
                          Antigua and Barbuda +1-268 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+54">Argentina +54</option>
                        <option value="+374">Armenia +374</option>
                        <option value="+61">Australia +61</option>
                        <option value="+43">Austria +43</option>
                        <option value="+994">Azerbaijan +994</option>
                        <option value="+1-242">Bahamas +1-242</option>
                        <option value="+973">Bahrain +973</option>
                        <option value="+880">Bangladesh +880</option>
                        <option value="+1-246">Barbados +1-246</option>
                        <option value="+375">Belarus +375</option>
                        <option value="+32">Belgium +32</option>
                        <option value="+501">Belize +501</option>
                        <option value="+229">Benin +229</option>
                        <option value="+1-441">Bermuda +1-441</option>
                        <option value="+975">Bhutan +975</option>
                        <option value="+591">Bolivia +591</option>
                        <option value="+387">
                          Bosnia and Herzegovina +387 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+267">Botswana +267</option>
                        <option value="+55">Brazil +55</option>
                        <option value="+673">Brunei +673</option>
                        <option value="+359">Bulgaria +359</option>
                        <option value="+226">Burkina Faso +226</option>
                        <option value="+257">Burundi +257</option>
                        <option value="+855">Cambodia +855</option>
                        <option value="+237">Cameroon +237</option>
                        <option value="+1">Canada +1</option>
                        <option value="+238">Cape Verde +238</option>
                        <option value="+1-345">Cayman Islands +1-345</option>
                        <option value="+236">
                          Central African Republic +236 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+235">Chad +235</option>
                        <option value="+56">Chile +56</option>
                        <option value="+86">China +86</option>
                        <option value="+57">Colombia +57</option>
                        <option value="+269">Comoros +269</option>
                        <option value="+243">
                          Congo, Democratic Republic of the +243 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+242">
                          Congo, Republic of the +242 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+506">Costa Rica +506</option>
                        <option value="+225">Côte d'Ivoire +225</option>
                        <option value="+385">Croatia +385</option>
                        <option value="+53">Cuba +53</option>
                        <option value="+357">Cyprus +357</option>
                        <option value="+420">Czech Republic +420</option>
                        <option value="+45">Denmark +45</option>
                        <option value="+253">Djibouti +253</option>
                        <option value="+1-767">Dominica +1-767</option>
                        <option value="+1-809">
                          Dominican Republic +1-809 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+670">East Timor +670</option>
                        <option value="+593">Ecuador +593</option>
                        <option value="+20">Egypt +20</option>
                        <option value="+503">El Salvador +503</option>
                        <option value="+240">Equatorial Guinea +240</option>
                        <option value="+291">Eritrea +291</option>
                        <option value="+372">Estonia +372</option>
                        <option value="+251">Ethiopia +251</option>
                        <option value="+679">Fiji +679</option>
                        <option value="+358">Finland +358</option>
                        <option value="+33">France +33</option>
                        <option value="+689">French Polynesia +689</option>
                        <option value="+241">Gabon +241</option>
                        <option value="+220">Gambia +220</option>
                        <option value="+995">Georgia +995</option>
                        <option value="+49">Germany +49</option>
                        <option value="+233">Ghana +233</option>
                        <option value="+30">Greece +30</option>
                        <option value="+299">Greenland +299</option>
                        <option value="+1-473">Grenada +1-473</option>
                        <option value="+1-671">Guam +1-671</option>
                        <option value="+502">Guatemala +502</option>
                        <option value="+224">Guinea +224</option>
                        <option value="+245">Guinea-Bissau +245</option>
                        <option value="+592">Guyana +592</option>
                        <option value="+509">Haiti +509</option>
                        <option value="+504">Honduras +504</option>
                        <option value="+852">Hong Kong +852</option>
                        <option value="+36">Hungary +36</option>
                        <option value="+354">Iceland +354</option>
                        <option value="+91" selected="selected">
                          India +91 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+62">Indonesia +62</option>
                        <option value="+98">Iran +98</option>
                        <option value="+964">Iraq +964</option>
                        <option value="+353">Ireland +353</option>
                        <option value="+44-1624">Isle of Man +44-1624</option>
                        <option value="+972">Israel +972</option>
                        <option value="+39">Italy +39</option>
                        <option value="+1-876">Jamaica +1-876</option>
                        <option value="+81">Japan +81</option>
                        <option value="+962">Jordan +962</option>
                        <option value="+7">Kazakhstan +7</option>
                        <option value="+254">Kenya +254</option>
                        <option value="+686">Kiribati +686</option>
                        <option value="+850">North Korea +850</option>
                        <option value="+82">South Korea +82</option>
                        <option value="+381">Kosovo +381</option>
                        <option value="+965">Kuwait +965</option>
                        <option value="+996">Kyrgyzstan +996</option>
                        <option value="+856">Laos +856</option>
                        <option value="+371">Latvia +371</option>
                        <option value="+961">Lebanon +961</option>
                        <option value="+266">Lesotho +266</option>
                        <option value="+231">Liberia +231</option>
                        <option value="+218">Libya +218</option>
                        <option value="+423">Liechtenstein +423</option>
                        <option value="+370">Lithuania +370</option>
                        <option value="+352">Luxembourg +352</option>
                        <option value="+389">Macedonia +389</option>
                        <option value="+261">Madagascar +261</option>
                        <option value="+265">Malawi +265</option>
                        <option value="+60">Malaysia +60</option>
                        <option value="+960">Maldives +960</option>
                        <option value="+223">Mali +223</option>
                        <option value="+356">Malta +356</option>
                        <option value="+692">Marshall Islands +692</option>
                        <option value="+222">Mauritania +222</option>
                        <option value="+230">Mauritius +230</option>
                        <option value="+52">Mexico +52</option>
                        <option value="+691">Micronesia +691</option>
                        <option value="+373">Moldova +373</option>
                        <option value="+377">Monaco +377</option>
                        <option value="+976">Mongolia +976</option>
                        <option value="+382">Montenegro +382</option>
                        <option value="+212">Morocco +212</option>
                        <option value="+258">Mozambique +258</option>
                        <option value="+95">Myanmar +95</option>
                        <option value="+264">Namibia +264</option>
                        <option value="+674">Nauru +674</option>
                        <option value="+977">Nepal +977</option>
                        <option value="+31">Netherlands +31</option>
                        <option value="+64">New Zealand +64</option>
                        <option value="+505">Nicaragua +505</option>
                        <option value="+227">Niger +227</option>
                        <option value="+234">Nigeria +234</option>
                        <option value="+47">Norway +47</option>
                        <option value="+1-670">
                          Northern Mariana Islands +1-670 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+968">Oman +968</option>
                        <option value="+92">Pakistan +92</option>
                        <option value="+680">Palau +680</option>
                        <option value="+970">Palestine +970</option>
                        <option value="+507">Panama +507</option>
                        <option value="+675">Papua New Guinea +675</option>
                        <option value="+595">Paraguay +595</option>
                        <option value="+51">Peru +51</option>
                        <option value="+63">Philippines +63</option>
                        <option value="+48">Poland +48</option>
                        <option value="+351">Portugal +351</option>
                        <option value="+1-939">Puerto Rico +1-939</option>
                        <option value="+974">Qatar +974</option>
                        <option value="+40">Romania +40</option>
                        <option value="+7">Russia +7</option>
                        <option value="+250">Rwanda +250</option>
                        <option value="+1-869">
                          Saint Kitts and Nevis +1-869 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+1-758">Saint Lucia +1-758</option>
                        <option value="+1-784">
                          Saint Vincent and the Grenadines +1-784 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+685">Samoa +685</option>
                        <option value="+378">San Marino +378</option>
                        <option value="+239">Sao Tome and Principe +239</option>
                        <option value="+966">Saudi Arabia +966</option>
                        <option value="+221">Senegal +221</option>
                        <option value="+381">Serbia and Montenegro +381</option>
                        <option value="+248">Seychelles +248</option>
                        <option value="+232">Sierra Leone +232</option>
                        <option value="+65">Singapore +65</option>
                        <option value="+421">Slovakia +421</option>
                        <option value="+386">Slovenia +386</option>
                        <option value="+677">Solomon Islands +677</option>
                        <option value="+252">Somalia +252</option>
                        <option value="+27">South Africa +27</option>
                        <option value="+34">Spain +34</option>
                        <option value="+94">Sri Lanka +94</option>
                        <option value="+249">Sudan +249</option>
                        <option value="+211">Sudan, South +211</option>
                        <option value="+597">Suriname +597</option>
                        <option value="+268">Swaziland +268</option>
                        <option value="+46">Sweden +46</option>
                        <option value="+41">Switzerland +41</option>
                        <option value="+963">Syria +963</option>
                        <option value="+886">Taiwan +886</option>
                        <option value="+992">Tajikistan +992</option>
                        <option value="+255">Tanzania +255</option>
                        <option value="+66">Thailand +66</option>
                        <option value="+228">Togo +228</option>
                        <option value="+676">Tonga +676</option>
                        <option value="+1-868">
                          Trinidad and Tobago +1-868 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+216">Tunisia +216</option>
                        <option value="+90">Turkey +90</option>
                        <option value="+993">Turkmenistan +993</option>
                        <option value="+688">Tuvalu +688</option>
                        <option value="+256">Uganda +256</option>
                        <option value="+380">Ukraine +380</option>
                        <option value="+971">United Arab Emirates +971</option>
                        <option value="+44">United Kingdom +44</option>
                        <option value="+1">United States +1</option>
                        <option value="+598">Uruguay +598</option>
                        <option value="+998">Uzbekistan +998</option>
                        <option value="+678">Vanuatu +678</option>
                        <option value="+379">Vatican City +379</option>
                        <option value="+58">Venezuela +58</option>
                        <option value="+84">Vietnam +84</option>
                        <option value="+1-284">
                          Virgin Islands, British +1-284 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+1-340">
                          Virgin Islands, U.S. +1-340 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                        <option value="+967">Yemen +967</option>
                        <option value="+260">Zambia +260</option>
                        <option value="+263">Zimbabwe +263</option>
                        <option value="+1-264">Anguilla +1-264</option>
                        <option value="+44-1481">Guernsey +44-1481</option>
                        <option value="+44-1624">Isle of Man +44-1624</option>
                        <option value="+44-1534">Jersey +44-1534</option>
                        <option value="+1-664">Montserrat +1-664</option>
                        <option value="+1-721">Sint Maarten +1-721</option>
                        <option value="+1-649">
                          Turks and Caicos Islands +1-649 <i class="fa-solid fa-chevron-down"></i>
                        </option>
                      </select>
                      
                      
                    </div>

                    <div class="col-8">
                      <input
                        class="form-control form-control-number"
                        id="phone" type="tel" name="phone"
                        placeholder="Mobile Phone"
                        required
                      />
                      <!-- <div class="alert alert-info" style="display: none"></div>
                      <div class="alert alert-error" style="display: none"></div> -->
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="contact-border-top text-center">
              <div class="my-5">MESSAGE</div>
              <div>
                <textarea
                  class="form-control mb-4 textarea-none"
                  placeholder="Message"
                  id="floatingTextarea2"
                  style="height: 230px"
                ></textarea>
              </div>

              <div class="mb-4" style="font-size: 14px; font-weight: 300;">Please visit <a  href="#"><ins>privacy policy</ins></a> to understand how Visator realty handles your personal data.</div>
              <div>
                <button
                  style="
                    border-radius: 2px;
                    background-color: none;
                    color: #fff;
                    font-family: Lato, sans-serif;
                    font-size: 12px !important;
                    font-weight: 700;
                    letter-spacing: 2px;
                    line-height: 24px;
                    text-align: center;
                    text-transform: uppercase;
                    margin-right: 0;
                    margin: 0 16px 0 0;
                    width: 30% !important;
                    height: 45px !important;
                    background-color: #000000 !important;
                    margin-top: 15px !important;
                  "
                >
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <div class="text-center form-space">
            <div class="fsize-32 pb-3">CALL US ON</div>
            <div class="fsize-18-1 fw-bolder">
              <p class="call-us-para">
                (10:00 hours to 18:00 hours all 7 days, except Public Holidays.)
              </p>
              <br />
              <div class="pb-4 call-us-para">
                For Post Sales Assistance –
                
                  <a href="#">1800-103-3643</a>
                
                (Toll Free). If calling from outside India -
                
                  <a href="#">+91-124-4416306</a>
                
                (International call rates may apply)
              </div>
              <div class="call-us-para">
                For Sales Enquiry -
                <span>
                  <a href="#">+91 8046971516</a>
                </span>
              </div>
            </div>
          </div>
          <div class="contact-border-top my-3"></div>

          <div class="text-center">        
            <div class="row align-items-center text-start form-space">
              <div class="col address-text">PUNE, <br> MAHARASHTRA</div>
              <div class="col address-text" style="font-weight: 500;  line-height: 28px;">
                Shatik park, behind Seasons mall, Aundh Pune 411007
              </div>
            </div>
            <div class="contact-border-top my-3"></div>
            <div class="emails-section mt-5">
                <div class="email-div1">
                  <p class="email-id-para1">
                    For Business Inquiries
                  </p>
                  <span class="email-id-para2">
                    kunalgholap@visatorrealty.com
                  </span>
                </div>
                <div class="email-div1">
                  <p class="email-id-para1">
                    Join Us
                  </p>
                  <span class="email-id-para2">
                    gholapkunal@visatorrealty.com
                  </span>
                </div>
                <div class="email-div1">
                  <p  class="email-id-para1">
                    HR Verification
                  </p>
                  <span class="email-id-para2">
                    verification@visatorrealty.com
                  </span>
                </div>
            </div>
          </div>

      </div>
    </div>
    </div>
    <!-- contact-section-1 starts --> 



    <!-- Send A Email Section Started Here -->
      <div class="send-email-section">
        <div class="container">
          <div class="contact-border-top mt-3 mb-5"></div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="send-email-content">
                <p class="send-email-content-para">
                  Sign up to receive exclusive news and offers about the latest launches
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="send-email-content send-email-content1">
                <input type="text" name="" id="" class="form-control form-control1" placeholder="Please provide your email">
                <a href="#" class="btn-subscribe">SUBSCRIBE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Send A Email Section Ended Here -->


   

    <footer>
      <div>
        <div class="footer-border d-flex justify-content-between footer-logo">
          <div>
            <img class="logo-img" src="./assets/index/logo.webp" alt="" />
          </div>
          <div class="d-flex align-items-center gap-3">
            <a href="./contact-us.php" class="color-w contact-us">Contact Us </a>

            <div><img src="./assets/yellow-arrow.png" alt="" /></div>
          </div>
        </div>
      </div>

      <div
        class="d-flex justify-content-center flex-row flex-wrap color-w fsize-18-1 mt-5"
      >
        <div class="sub-footer-component">
          <div >
            <a class="footer-sub-content" href="">Find & lease space</a>
          </div>
          <div >
            <a class="footer-sub-content" href="">Manage property & portfolio</a>
          </div>
          <div >
            <a class="footer-sub-content" href="">Design & deliver projects</a>
          </div>
          <div >
            <a class="footer-sub-content" href="">Invest in real estate</a>
          </div>
        </div>
        <div class="sub-footer-component">
          <div></div>
          <a  class="footer-sub-content" href="">Transform with technology</a>

          <div>
            <a  class="footer-sub-content" href="">Industries</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Trends & Insights</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="./services.php">Services</a>
          </div>
        </div>
        <div class="sub-footer-component">
          <div>
            <a  class="footer-sub-content" href="./about-us.php">About Visator realty</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Careers</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Newsroom</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Our ESG & sustainability</a>
          </div>
        </div>
        <div class="sub-footer-component">
          <div>
            <a  class="footer-sub-content" href="">Leadership program | Visator realty</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Investor relations</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="./contact-us.php">Contact Us</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Subscribe to our newsletter</a>
          </div>
        </div>
      </div>

      <div class="color-w footer-sec-3">
        <!-- <div class="fsize-36 follow-us">Follow Us</div> -->
        <div class="social-media">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-twitter"></i>
          
        </div>
      </div>
    </footer>

    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./js/contact-us.js"></script>
    <script src="../script.js"></script>
  </body>
</html>