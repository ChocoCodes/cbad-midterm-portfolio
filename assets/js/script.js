const timeField = document.getElementById('time')
const dateField = document.getElementById('date')
const navLinks = document.querySelectorAll('.sidebar-nav-item a')
const experienceSection = document.getElementById('experience')
const educationSection = document.getElementById('education')

const formatField = (num) => num < 10 ? `0${num}` : num

const formatTime = () => {
    const now = new Date()
    const hour = now.getHours() 
    const minute = now.getMinutes()
    const prepand = hour < 12 ? 'AM' : 'PM'
    // Set Military Time (24H) to Standard Time (12H)
    const standard = hour % 12 || 12
    timeField.innerText = `${formatField(standard)}:${formatField(minute)} ${prepand} (PHT)`
}

const formatDate = () => {
    const now = new Date()
    const formatted = now.toLocaleDateString('en-PH', {
        weekday: 'long',
        month: 'short',
        day: 'numeric',
        year: 'numeric',
        timeZone: 'Asia/Manila'
    })

    dateField.innerText = formatted
}

/* 
   Style the right border of the user's current page
   Get the pathname of the current page and check for the .php page
   home page is treated as "", so the default page is index.php
   Add class active-page to show the border in the <li>, else remove class
*/ 
const styleActiveNavItem = () => {
    const pagePath = window.location.pathname
    const currentPage = pagePath.split("/").pop() || "index.php"
    navLinks.forEach(nav => {
        const link = nav.href.split("/").pop()
        if(currentPage === link) {
            nav.parentElement.classList.add("active-page")
        } else {
            nav.parentElement.classList.remove("active-page")
        }
    })
}   

const syncMinuteRefresh = () => {
    formatTime()

    const now = new Date()
    const msNextMin = (60 - now.getSeconds()) * 1000 - now.getMilliseconds()

    setTimeout(() => {
        // Update every minute
        setInterval(formatTime, 60 * 1000)
    }, msNextMin)
}

const showExperience = () => {
    experienceSection.classList.remove('d-none');
    experienceSection.classList.add('d-flex');

    educationSection.classList.remove('d-flex');
    educationSection.classList.add('d-none');
}

const showEducation = () => {
    educationSection.classList.remove('d-none');
    educationSection.classList.add('d-flex');

    experienceSection.classList.remove('d-flex');
    experienceSection.classList.add('d-none');
}

formatDate()
// Align time updates (in minutes)
syncMinuteRefresh()
styleActiveNavItem()