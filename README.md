# NHPC-stock-price-project
It is a comprehensive website dedicated to providing up-to-date information on NHPC's stock performance. The website features a user
authentication system to ensure secure access to the stock information.
To access the stock information, users must first log in. The login page is seamlessly
connected to a database, which contains a ‘user’ table. This table is responsible for verifying
the validity of your username and password, ensuring that only authorized users gain access.
Once authenticated, users are redirected to the NHPC stock page. This page is designed to
display the most current information about NHPC's stock. To ensure that you always have the
latest data, the stock page refreshes itself automatically every 30 minutes.
The NHPC Stock Information Website is a robust, secure, and user-friendly platform
designed to provide real-time stock information. Its comprehensive feature set, coupled with
a strong technological foundation, ensures that users have access to accurate and timely data,
making it an essential tool for monitoring NHPC's stock performance.

REQUIREMENTS
The database includes two primary tables: the ‘user’ table and the ‘nhpc_stock’ table.
1. Stock Price Data Source:
   - API Access: Use money.rediff.com API to get real-time stock prices.
   - API Key:
      Register with the chosen API provider to obtain an API key for access.
      Securely store and manage API keys and credentials for accessing the stock data.
2. Backend Server:
      Require XAMPP server.
      Database Server-MySQL 8.0
3. Frontend:
      HTML, CSS, JavaScript

4. Backend:
      PHP
