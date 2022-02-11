<nav class="hidden md:flex bg-white border-b border-gray-200">
  <div class="w-full text-gray-700 justify-center flex flex-row">
    <div class="flex justify-center h-12 flex-row items-center px-4 py-2">
      <a href="/"
        class="text-lg font-semibold tracking-widest  text-gray-900 uppercase    dark-mode:text-white focus:outline-none focus:shadow-outline">
        HOME
      </a>
    </div>
  </div>
</nav>
<nav class="bg-white border-b border-gray-200">
  <div class="w-full text-gray-700 max-w-screen container">
    <div x-data="{ open: false }" class="flex flex-col w-screen lg:flex-row">
      <div class="flex flex-row justify-between px-8  py-2">
        <a href="/"
          class="text-lg font-semibold tracking-widest justify-between text-yellow-500 dark-mode:text-white focus:outline-none focus:shadow-outline uppercase">
          Home
        </a>
        <button class="mr-0 rounded-lg lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <i class="fa-solid fa-xmark h-6 w-8 fill-white dark:fill-white" x-show="open"></i>
          <span class="sr-only" x-show="open" style="display: none;">Close Menu</span><!-- /.sr-only -->
          <i class="fa-solid fa-bars h-6 w-8 fill-white dark:fill-white" x-show="!open"></i>
          <span class="sr-only" x-show="!open">Open Menu</span><!-- /.sr-only -->
        </button>
      </div>
      <nav class="flex-col hidden h-screen pb-10 lg:pb-0 lg:flex lg:justify-start lg:flex-row lg:h-auto"
        aria-label="Main Navigation" :class="{'flex': open, 'hidden': !open}">
        <ul class="flex flex-col flex-wrap  px-6 lg:px-8 m-0 lg:flex-row md:flex md:flex-row">
          <li class="group relative block md:flex-row lg:px-0 xl:px-0" x-data="{isOpen:false }"
            @mouseleave="isOpen = false">
            <a href="#" class="py-2
                px-4  hover:text-yellow-500 text-cyan-600 text-lg font-semibold tracking-widest uppercase"
              @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">
              PRINTING
              <i class="fa fa-chevron-down text-cyan-600"></i><a href="" class="hover:text-yellow-500"> </a>
            </a>
            <ul class="bg-white p-2 px-10" aria-label="submenu" x-show="isOpen" @click.away="isOpen = false"
              style="display: none;">
              <li class="">
                <a href="#" class="py-2 text-black hover:text-red-500 uppercase lg:text-sm">
                  Large Format Printing</a>
              </li>
              <li class="">
                <a href="#" class="py-2 text-black bg-transparent hover:text-green-800 uppercase lg:text-sm">
                  Label Printing(Print & Cut)
                </a>
              </li>
              <li class="">
                <a href="#" class="py-2 hover:text-slate-100 text-black lg:text-sm uppercase">
                  T-Shirt Printing
                </a>
              </li>
              <li class="">
                <a href="#" class="py-2 hover:text-slate-100 text-black lg:text-sm uppercase">
                  Digital Printing
                </a>
              </li>
              <li class="">
                <a href="#" class="py-2 text-black bg-transparent hover:text-gray-100 uppercase lg:text-sm">
                  Offset Printing
                </a>
              </li>
            </ul>
          </li>
          <li class="group relative block md:flex-row lg:px-0 xl:px-0" x-data="{isOpen:false }" @mouseleave="isOpen = false">
              <a href="#" class="py-2
                                        px-4  hover:text-yellow-500 text-cyan-600 text-lg font-semibold tracking-widest uppercase"
                @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">
                PACKAGING
                <i class="fa fa-chevron-down text-cyan-600"></i><a href="" class="hover:text-yellow-500"> </a>
              </a>
              <ul class="bg-white p-2 px-10" aria-label="submenu" x-show="isOpen" @click.away="isOpen = false"
                style="display: none;">
                <li class="">
                  <a href="#" class="py-2 text-black hover:text-red-500 uppercase lg:text-sm">
                    Large Format Printing</a>
                </li>
              </ul>
            </li>
          <li class="group relative block md:flex-row lg:px-0 xl:px-0" x-data="{isOpen:false }"
            @mouseleave="isOpen = false">
            <a href="#" class="py-2
                            px-4  hover:text-yellow-500 text-cyan-600 text-lg font-semibold tracking-widest uppercase"
              @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">
              EMBROIDERY
              <i class="fa fa-chevron-down text-cyan-600"></i><a href="" class="hover:text-yellow-500"> </a>
            </a>
            <ul class="bg-white p-2 px-10" aria-label="submenu" x-show="isOpen" @click.away="isOpen = false"
              style="display: none;">
              <li class="">
                <a href="#" class="py-2 text-black hover:text-red-500 uppercase lg:text-sm">
                  Large Format Printing</a>
              </li>
              <li class="">
                <a href="#" class="py-2 text-black bg-transparent hover:text-green-800 uppercase lg:text-sm">
                  Label Printing(Print & Cut)
                </a>
              </li>
              <li class="">
                <a href="#" class="py-2 hover:text-slate-100 text-black lg:text-sm uppercase">
                  T-Shirt Printing
                </a>
              </li>
              <li class="">
                <a href="#" class="py-2 hover:text-slate-100 text-black lg:text-sm uppercase">
                  Digital Printing
                </a>
              </li>
              <li class="">
                <a href="#" class="py-2 text-black bg-transparent hover:text-gray-100 uppercase lg:text-sm">
                  Offset Printing
                </a>
              </li>
            </ul>
          </li>
        
          <li class="group relative block md:flex-row lg:px-0 xl:px-0" x-data="{isOpen:false }"
            @mouseleave="isOpen = false">
            <a href="#"
              class="py-2
                                        px-4  hover:text-yellow-500 text-cyan-600 text-lg font-semibold tracking-widest uppercase"
              @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">
              LASER ENGRAVING
              {{-- <i class="fa fa-chevron-down text-cyan-600"></i><a href="" class="hover:text-yellow-500"> </a> --}}
            </a>
          </li>
          <li class="group relative block md:flex-row lg:px-0 xl:px-0" x-data="{isOpen:false }" @mouseleave="isOpen = false">
            <a href="#"
              class="py-2
                                                  px-4  hover:text-yellow-500 text-cyan-600 text-lg font-semibold tracking-widest uppercase"
              @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">
              3D SIGNAGE & MOULDING
              <i class="fa fa-chevron-down text-cyan-600"></i><a href="" class="hover:text-yellow-500"> </a>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</nav>