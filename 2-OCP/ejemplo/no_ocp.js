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
  
  class Manager extends Employee {
    constructor(name, id, hourlyWage, bonus) {
      super(name, id, hourlyWage);
      this.bonus = bonus;
    }
  
    calculatePay(hours) {
      return super.calculatePay(hours) + this.bonus;
    }
  }
  
  class Salesperson extends Employee {
    constructor(name, id, hourlyWage, commissionRate, sales) {
      super(name, id, hourlyWage);
      this.commissionRate = commissionRate;
      this.sales = sales;
    }
  
    calculatePay(hours) {
      return super.calculatePay(hours) + (this.sales * this.commissionRate);
    }
  }