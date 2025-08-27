const timeField = document.getElementById('time')
const dateField = document.getElementById('date')
const navLinks = document.querySelectorAll('.sidebar-nav-item a')
const experienceSection = document.getElementById('experience')
const educationSection = document.getElementById('education')
const experienceBtn = document.getElementById('exp-btn')
const educationBtn = document.getElementById('edu-btn')


const loadProjects = () => {
    const projectContainer = document.getElementById('project-container')
    projects.forEach(project => {
        const card = document.createElement("div");

        card.innerHTML = `
            <img class="rounded-start-3" src=${ project.imgPath } alt=${ project.title }/>
            <div class="card-content d-flex flex-column justify-content-between gap-1 px-3 py-4">
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex flex-column gap-1">
                        <h3 class="no-mb text-heading poppins-medium fs-5">${ project.title }</h3>
                        <p id="project-stack" class="no-mb poppins-regular-italic">${ project.stack.join(', ') }</p>
                        </div>
                        <p id="project-desc" class="w-100 no-mb text-paragraph poppins-regular fs-6">${ project.description }</p>
                    </div>
                <div class="d-flex gap-4 mt-1">
                    ${ project.githubLink ? `<a id='github-btn' class='rounded-3 py-1 px-4' target='_blank' href=${ project.githubLink }>Github</a>` : "<p class='no-mb text-paragraph fs-6'>Coming Soon!</p>" }
                    ${ project.demoLink ? `<a id='demo-btn' class='rounded-3 py-1 px-4'target='_blank' href=${ project.demoLink }>Demo</a>` : "" }
                </div>

            </div>
        `

        card.className = 'project-card d-flex rounded-3 gap-2'
        projectContainer.appendChild(card)
    })
}

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
    // Toggle experience
    experienceSection.classList.remove('d-none')
    experienceSection.classList.add('d-flex')
    experienceBtn.classList.add('active-section')
    experienceBtn.classList.remove('default-section')
    // Disable education
    educationSection.classList.remove('d-flex')
    educationSection.classList.add('d-none')
    educationBtn.classList.remove('active-section')
    educationBtn.classList.add('default-section')
}

const showEducation = () => {
    // Toggle education
    educationSection.classList.remove('d-none')
    educationSection.classList.add('d-flex')
    educationBtn.classList.add('active-section')
    educationBtn.classList.remove('default-section')
    // Disable experience
    experienceSection.classList.remove('d-flex')
    experienceSection.classList.add('d-none')
    experienceBtn.classList.remove('active-section')
    experienceBtn.classList.add('default-section')
}

const appendToolTips = () => {
    const tooltipsEl = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    tooltipsEl.forEach(tooltipEl => new bootstrap.Tooltip(tooltipEl))
}

document.addEventListener("DOMContentLoaded", () => {
    const pagePath = window.location.pathname
    const currentPage = pagePath.split("/").pop()
    if (currentPage === 'projects.php') {
        loadProjects()
    }
    formatDate()
    // Align time updates (in minutes)
    syncMinuteRefresh()
    appendToolTips()
})

window.addEventListener("resize", () => {
    // Style only on 768px above
    if (window.innerWidth > 768) {
        styleActiveNavItem()
    } else {
        navLinks.forEach(nav => {
            nav.parentElement.classList.remove("active-page")
        })
    }
})