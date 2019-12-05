## Project Database
ส่งวันที่ 9 ไฟไหมชิบหายวายวอด

## Requirement
1. ~~[A] The website has products catalog which categorizes by product vendors and product scale. The catalog is displayed publicly. ~~
2. ~~[B] Employees can log-in with a unique employee number and password. Any password in the system mustn’t be stored as plaintext.~~
3. _[C] Employees in the sales department, who have “sale” in their job title can access a stock-in system (ระบบรับสินค้าเข้า), which records date, and amount of product in each lot as well as create, update, and delete products._ -> on going
4. [D] When customers buy any product will get 3 member points every $100 spent. The system must show the total points they have and how many points get from each order.
5. _[E] In this application, employees will place an order for customers by adding products to one order and enter a customer who buys it. Every order will have “in progress” as a default status. If customers have a preferred shipping date, it will set in “required date”. Employees can edit some columns later, which are shipped date, status, and comments._ -> on going
6. _[F] Before customers can place an order they need to be a member first. Employees will key customers personal information to the system._-> on going
7. _[G] A payment system is an old school method. After the order was placed, customers will make payments using money cheque. Then, employees will note the payment cheque in a table “payments”. Once a package is ready, the order status will change to “shipped”._-> on going
8. ~~[H] The order can have six statuses which are: cancelled, disputed (ผู้รับปฏิเสธการรับของ เช่น ของไม่ครบ, เสียหาย, ส่งผิด), in process, on hold, resolved (เคยเกิดปัญหา แต่แก้ไขเรียบร้อยแล้ว), and shipped.~~
9. [I] There is an employee resource management (ERM) feature. This feature allows sales departments to manage their employees. Such as VP sales can promote and demote sales managers from employees. After that, sales managers can promote and demote sales representative respective.
10. [K] Promotion: Discount code (คูปองส่วนลด) VP marketing can create a discount code as well as a discount amount is, how many times the code can use, and expiry date. For example, a code “XMAS19” will discount $10 from a total amount, can be used 1,000 times, and will expire after December 26, 2019. The code will use in the ordering process by employees. Then the customers will get a discount that subtracts from the total amount.
11. [M] Multiple customer addresses.Employees can add, edit, remove customers' addresses. However, each customer must have at least one address as a primary address.Those addresses are selectable in a check out page as shipping address and billing address.
Even addresses are deleted by users, must be shown in the shipped orders as history (keyword: soft-delete).
