<div id="sidebarMenu" class="h-screen text-gray-700 bg-gray-200 rounded-lg filter drop-shadow-lg flex-shrink-0">
<nav :class="{'block': open, 'hidden': !open}" class="sticky pt-3 h-screen flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
    <ul class="flex flex-col">
        <li class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-green-400 focus:bg-gray-300 focus:outline-none focus:shadow-outline">
            <a aria-current="page"
                href="/">
                <span data-feather="home"></span>
                Dashboard
            </a>
        </li>
        <li class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-green-400 focus:bg-gray-300 focus:outline-none focus:shadow-outline">
            <a href="/books">
                <span data-feather="shopping-cart"></span>
                Books
            </a>
        </li>
        <li class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-green-400 focus:bg-gray-300 focus:outline-none focus:shadow-outline">
            <a href="users">
                <span data-feather="users"></span>
                Users
            </a>
        </li>

        <li class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-green-400 focus:bg-gray-300 focus:outline-none focus:shadow-outline">
            <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
            </a>
        </li>
    </ul>
    </nav>
</div>
