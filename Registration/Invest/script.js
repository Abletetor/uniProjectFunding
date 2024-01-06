document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('interest-form');
    const principalInput = document.getElementById('principal');
    const resultDiv = document.getElementById('result');
    const interestRateP = document.getElementById('interest-rate');
    const interestAmountP = document.getElementById('interest-amount'); // Added element for displaying interest amount

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const principal = parseFloat(principalInput.value);
        const years = parseInt(document.getElementById('years').value);

        if (isNaN(principal) || isNaN(years) || principal <= 0 || years <= 0) {
            alert('Please enter valid values for the initial amount and the number of years.');
            return;
        }

        const { interestRate, interestAmount } = calculateInterest(principal, years); // Calculate both rate and amount

        interestRateP.textContent = `${interestRate.toFixed(2)}%`;
        interestAmountP.textContent = `GHC ${interestAmount.toFixed(2)}`; // Display the interest amount
        resultDiv.classList.remove('hidden');
    });

    function calculateInterest(principal, years) {
        // For this, we're using a fixed interest rate of 30% per year
        var fixedInterestRate = 30;
        // Calculate the total interest
        const totalInterest = (principal * fixedInterestRate * years) / 100;
        // Calculate the interest rate per year
        const interestRatePerYear = (totalInterest / principal) * 100;
        return {
            interestRate: interestRatePerYear,
            interestAmount: totalInterest + principal,
        };
    }
});
