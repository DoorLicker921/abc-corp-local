function currDate()
{
    const now = new Date();

    const items =
    {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    const liveDate = now.toLocaleDateString(undefined, items);

    const dateElement = document.getElementById('date');

    if (dateElement)
    {
        dateElement.textContent = liveDate;
    }
}

currDate();