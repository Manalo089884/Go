 <!-- Footer -->
 <script src="https://cdn.tailwindcss.com"></script>

 <footer class="pt-10 bg-success">
    <div>
      <div class="flex flex-col w-11/12 mx-auto gap-9 md:flex-row">

        <!-- GO DENTAL / Div1 -->

        <div class="flex-auto text-gray-200 md:w-72">
            <p class="mb-4 text-lg font-semibold md:text-center">GO DENTAL</p>
                <span class="text-base font-light mb-7">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur.
                </span>
        </div>

        <!-- Contact Us / Div2 -->

        <div class="text-gray-200 md:w-48">
            <a href="{{ Route('contact') }}" class="mb-4 text-lg font-semibold">Contact Us</a>
              <ul>
                <div class="mb-4">
                    <li>
                        <div class="flex items-center gap-1">
                            <i class="text-base fas fa-phone"></i>
                            <a href="javascript:void(0)" class="text-base leading-loose text-body-color hover:text-primary">
                                +012 (345) 678 99
                            </a>
                        <div>
                    </li>
                    <li>
                        <div class="flex items-center gap-1 mb-2">
                            <i class="text-base fas fa-envelope"></i>
                            <a href="javascript:void(0)" class="text-base leading-loose text-body-color hover:text-primary">
                                godental@gmail.com
                            </a>
                        </div>
                    </li>
                </div>
              </ul>
              <!-- Legal / Div2.1 -->
              <h4 class="mb-3 text-lg font-semibold">Legal</h4>
              <ul>
                <li>
                    <a href="{{ Route('terms') }}" class="inline-block mb-2 text-base leading-loose text-body-color hover:text-primary">
                        Terms
                    </a>
                </li>
                <li>
                    <a href="{{ Route('privacy') }}" class="inline-block mb-2 text-base leading-loose text-body-color hover:text-primary">
                        Privacy
                    </a>
                </li>
              </ul>
        </div>

        <!-- Customer Care / Div3 -->

        <div class="text-gray-200 md:w-48">
            <h4 class="mb-4 text-lg font-semibold text-dark">Customer Care</h4>
            <ul>
              <li>
                <a href="{{ Route('about') }}" class="inline-block mb-2 text-base leading-loose text-body-color hover:text-primary">
                  About Us
                </a>
              </li>
              <li>
                <a href="{{ Route('faq') }}" class="inline-block mb-2 text-base leading-loose text-body-color hover:text-primary">
                  FAQ
                </a>
              </li>
              <li>
                <a href="{{ Route('faq') }}" class="inline-block mb-2 text-base leading-loose text-body-color hover:text-primary">
                  Payment FAQ
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"class="inline-block mb-2 text-base leading-loose text-body-color hover:text-primary">
                  Shipping & Delivery
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="inline-block mb-2 text-base leading-loose text-body-color hover:text-primary">
                  Return & Exchanges
                </a>
              </li>
            </ul>
        </div>

        <!-- Our Address / Div4 -->

          <div class="md:w-96">
            <h4 class="mb-2 text-lg font-semibold text-gray-200">Our Address</h4>
                <p class="inline-block mb-2 text-base leading-loose text-gray-200 hover:text-primary">
                Grand Royale Subdivision, Brgy. Pinagbakahan, City of Malolos
                Bulacan 3000
                </p>
                <h4 class="mb-4 text-lg font-semibold text-center text-gray-200">Follow Us</h4>
                <div class="flex flex-row mx-auto text-gray-200 gap-9">
                    <div class="flex justify-end flex-1">
                        <a href="javascript:void(0)" class="hover:text-primary">
                            <i class="text-3xl fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <div class="flex justify-center flex-1">
                        <a href="javascript:void(0)" class="hover:text-primary">
                            <i class="text-3xl fa fa-facebook-square"></i>
                        </a>
                    </div>
                    <div class="flex justify-start flex-1">
                        <a href="javascript:void(0)"class="hover:text-primary">
                            <i class="text-3xl fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
          </div>
      </div>
    </div>
  </footer>
