class Employee {
  constructor(name, id, hourlyWage) {
    this.name = name;
    this.id = id;
    this.hourlyWage = hourlyWage;
  }

  calculatePay(hours) {
    return this.hourlyWage * hours;
  }
}

class ManagerPayCalculator {
  constructor(basePay, bonus) {
    this.basePay = basePay;
    this.bonus = bonus;
  }

  calculatePay(hours) {
    return this.basePay + this.bonus;
  }
}

class SalespersonPayCalculator {
  constructor(basePay, commissionRate, sales) {
    this.basePay = basePay;
    this.commissionRate = commissionRate;
    this.sales = sales;
  }

  calculatePay(hours) {
    return this.basePay + (this.sales * this.commissionRate);
  }
}

class EmployeePayroll {
  constructor(employee, payCalculator) {
    this.employee = employee;
    this.payCalculator = payCalculator;
  }

  calculatePay(hours) {
    return this.payCalculator.calculatePay(hours);
  }
}