const dateField = document.getElementById('date')
const DAYS = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

const formatField = (num) => num < 10 ? `0${num}` : num

const formatDate = () => {
    const now = new Date()
    const day = now.getDay()

    const dd = now.getDate()
    const mm = now.getMonth()
    const yyyy = now.getFullYear()

    const h = now.getHours()
    const m = now.getMinutes()
}

formatDate()
// Update every minute
setInterval(formatDate, 60 * 1000)