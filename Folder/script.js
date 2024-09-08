document.addEventListener('DOMContentLoaded', () => {
    const channels = document.querySelectorAll('.channel');
    const aboutItem = document.getElementById('about-item');
    const featuresItem = document.getElementById('features-item');
    const pricingItem = document.getElementById('pricing-item');
    const chargesItem = document.getElementById('charges-item');
    const documentationItem = document.getElementById('documentation-item');
    const conditionsItem = document.getElementById('conditions-item');
    const contentDisplay = document.getElementById('content-display');
    const subContent = document.getElementById('Sub-Content');

    let currentChannel = 'moneygram'; // Default channel

    const content = {
        moneygram: {
            about: "Money Gram is a leading provider of international money transfer services.",
            features: "Features of Money Gram include low fees, fast transfers, and worldwide availability.",
            pricing: "Money Gram's pricing varies depending on the amount sent and destination country.",
            charges: "Charges are competitive, starting at a low percentage of the total transfer amount.",
            documentation: "To use Money Gram, you need a valid government ID and proof of address.",
            conditions: "Conditions include compliance with local and international regulations."
        },
        westernunion: {
            about: "Western Union is one of the oldest and largest money transfer companies globally.",
            features: "Features include fast transfers, numerous payout locations, and online tracking.",
            pricing: "Western Union's pricing depends on the transfer amount, speed, and destination.",
            charges: "Western Union charges may vary, but they aim to offer competitive rates.",
            documentation: "To use Western Union, you must provide an ID and complete their transfer form.",
            conditions: "Western Union requires compliance with international anti-money laundering laws."
        }
    };

    function updateContent(section) {
        const channelData = content[currentChannel];
        contentDisplay.innerHTML = `<p>${channelData[section]}</p>`;
    }

    // Click events for section items
    aboutItem.addEventListener('click', () => updateContent('about'));
    featuresItem.addEventListener('click', () => updateContent('features'));
    pricingItem.addEventListener('click', () => updateContent('pricing'));
    chargesItem.addEventListener('click', () => updateContent('charges'));
    documentationItem.addEventListener('click', () => updateContent('documentation'));
    conditionsItem.addEventListener('click', () => updateContent('conditions'));

    // Function to toggle between MoneyGram and WesternUnion
    channels.forEach(channel => {
        channel.addEventListener('click', (event) => {
            currentChannel = event.currentTarget.getAttribute('data-channel');

            // Reset the content to the "About" section for the new channel
            updateContent('about');

            // Update the hover style class based on the selected channel
            if (currentChannel === 'moneygram') {
                aboutItem.textContent = 'About Money Gram';
                subContent.classList.remove('westernunion-hover');
                subContent.classList.add('moneygram-hover');
            } else if (currentChannel === 'westernunion') {
                aboutItem.textContent = 'About Western Union';
                subContent.classList.remove('moneygram-hover');
                subContent.classList.add('westernunion-hover');
            }
        });
    });
});
