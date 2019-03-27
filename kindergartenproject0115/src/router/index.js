import Vue from 'vue'
import Router from 'vue-router'
//import Index from '@/components/index/Index'
import Login from '.././Login'
import Report from '@/components/finance/Report'
import Task from '@/components/finance/Task'
import Income from '@/components/finance/Income'
import Budget from '@/components/finance/Budget'
import Taskmanagement from '@/components/finance/Taskmanagement'
import Revenuemanagement from '@/components/finance/Revenuemanagement'
import Material from '@/components/finance/Material'
import Reservefund from '@/components/finance/Reservefund'
import Expenditure from '@/components/finance/Expenditure'
import Payroll from '@/components/finance/Payroll'
import Payrollindex from '@/components/finance/Payrollindex'
import AverageMark from '@/components/finance/AverageMark'
import MarkMoney from '@/components/finance/MarkMoney'



import Employeegrowth from '@/components/administration/Employeegrowth'
import Backbone from '@/components/administration/Backbone'
import Employeepromotion from '@/components/administration/Employeepromotion'
import Attendance from '@/components/administration/Attendance'
import Departure from '@/components/administration/Departure'
import Inservice from '@/components/administration/Inservice'
import Chieflog from '@/components/administration/Chieflog'
import Headexamination from '@/components/administration/Headexamination'
import Gardenexamination from '@/components/administration/Gardenexamination'
import Staffmanagement from '@/components/administration/Staffmanagement'
import Recruit from '@/components/administration/Recruit'
import Initialinformation from '@/components/administration/Initialinformation'
import Corporateculture from '@/components/administration/Corporateculture'
import Payrollsetup from '@/components/administration/Payrollsetup'
import Attendancerate from '@/components/administration/Attendancerate'
import Farmmanagement from '@/components/administration/Farmmanagement'
import Positionmanagement from '@/components/administration/Positionmanagement'
import Department from '@/components/administration/Department'
import Jobdiary from '@/components/administration/Jobdiary'
import Filedetails from '@/components/administration/Filedetails'
import Assetdetails from '@/components/administration/Assetdetails'



import Speciality from '@/components/studentfiles/Speciality'
import Specialtystatistics from '@/components/studentfiles/Specialtystatistics'
import Studentfiles from '@/components/studentfiles/Studentfiles'
import Childattendance from '@/components/studentfiles/Childattendance'
import Studyfile from '@/components/studentfiles/Studyfile'
import AddSource from '@/components/studentfiles/AddSource'
import FllowMark from '@/components/studentfiles/FllowMark'
import FllowRecord from '@/components/studentfiles/FllowRecord'
import AttendanceMark from '@/components/studentfiles/AttendanceMark'
import RecruitMark from '@/components/studentfiles/RecruitMark'
import PayrollindexMark4 from '@/components/studentfiles/PayrollindexMark4'
import PayrollOne from '@/components/studentfiles/PayrollOne'
import PayrollThree from '@/components/studentfiles/PayrollThree'
import YuComputer from '@/components/studentfiles/YuComputer'





import Indicators from '@/components/assessment/Indicators'
import Noauthority from '@/components/assessment/Noauthority'



import Addkind from '@/components/Food/Addkind'
import Nutrition from '@/components/Food/Nutrition'
import Caigou from '@/components/Food/Caigou'
import ReplaceCai from '@/components/Food/ReplaceCai'
import WeekDishesManage from '@/components/Food/WeekDishesManage'
import Monthlymenu from '@/components/Food/Monthlymenu'


import PersonManage from '@/components/PersonManage/PersonManage'
import EmployeeManage from '@/components/PersonManage/EmployeeManage'
import LogManage from '@/components/PersonManage/LogManage'
import Classtable from '@/components/PersonManage/Classtable'
import Education from '@/components/PersonManage/Education'
import WagesTable from '@/components/PersonManage/WagesTable'
import PatrolLog from '@/components/PersonManage/PatrolLog'
import WorkLog from '@/components/PersonManage/WorkLog'
import Addstaff from '@/components/PersonManage/Addstaff'

import Moving from '@/components/Message/Moving'
import Notice from '@/components/Message/Notice'
import Gorw from '@/components/Message/Gorw'
import Application from '@/components/Message/Application'
import Resourcemanagement from '@/components/Message/Resourcemanagement'
Vue.use(Router)

export default new Router({
  mode:'history',
  routes: [
//  {
//    path:'/index',
//    name: 'Index',
//    component:Index
// },
    {
      path: '/login',
      name: 'login',
      component:Login
   },
   {
   		path: '/report',
      name: 'Report',
      component: Report
   },
   {
   		path: '/task',
      name: 'Task',
      component: Task
   },
   {
   		path: '/income',
      name: 'Income',
      component: Income
   },
   {
   		path: '/budget',
      name: 'Budget',
      component: Budget
   },
   {
   		path: '/taskmanagement',
      name: 'Taskmanagement',
      component: Taskmanagement
   },
   {
   		path: '/revenuemanagement',
      name: 'Revenuemanagement',
      component: Revenuemanagement
   },
   {
   		path: '/material',
      name: 'Material',
      component: Material
   },
   {
   		path: '/reservefund',
      name: 'Reservefund',
      component: Reservefund
   },
   {
   		path: '/expenditure',
      name: 'Expenditure',
      component: Expenditure
   },
   {
   		path: '/employeegrowth',
      name: 'Employeegrowth',
      component: Employeegrowth
   },
   {
   		path: '/backbone',
      name: 'Backbone',
      component: Backbone
   },
   {
   		path: '/employeepromotion',
      name: 'Employeepromotion',
      component: Employeepromotion
   },
   {
   		path: '/attendance',
      name: 'Attendance',
      component: Attendance
   },
   {
   		path: '/departure',
   		name: 'Departure',
   		component: Departure
   },
   {
   		path: '/inservice',
   		name: 'Inservice',
   		component: Inservice
   },
   {
   		path: '/payroll',
   		name: 'Payroll',
   		component: Payroll
   },
   {
   		path: '/speciality',
   		name: 'Speciality',
   		component: Speciality
   },
   {
   		path: '/specialtystatistics',
   		name: 'Specialtystatistics',
   		component: Specialtystatistics
   },
   {
   		path: '/studentfiles',
   		name: 'Studentfiles',
   		component: Studentfiles
   },
   {
   		path: '/Studyfile',
   		name: 'studyfile',
   		component: Studyfile
   },
   {
   		path: '/AddSource',
   		name: 'addsource',
   		component: AddSource
   },
   {
   		path: '/childattendance',
   		name: 'Childattendance',
   		component: Childattendance
   },
   {
   		path: '/chieflog',
   		name: 'Chieflog',
   		component: Chieflog
   },
   {
   		path: '/indicators',
   		name: 'Indicators',
   		component: Indicators
   },
   {
   		path: '/headexamination',
   		name: 'Headexamination',
   		component: Headexamination
   },
   {
   		path: '/gardenexamination',
   		name: 'Gardenexamination',
   		component: Gardenexamination
   },
   {
		path: '/Addkind',
	  name: 'add-kind',
	  component:Addkind
	},
	{
		path: '/Nutrition',
	  name: 'nutrition',
	  component:Nutrition
	},
	{
		path: '/Caigou',
	  name: 'caigou',
	  component:Caigou
	},
	{
		path: '/ReplaceCai',
	  name: 'replace-cai',
	  component:ReplaceCai
	},
	{
		path: '/PersonManage',
	  name: 'personmanage',
	  component:PersonManage
	},
	{
		path: '/EmployeeManage',
	  name: 'employeemanage',
	  component:EmployeeManage
	},
	{
		path: '/LogManage',
	  name: 'logmanage',
	  component:LogManage
	},
 {
		path: '/Classtable',
	  name: 'classtable',
	  component:Classtable
	},
	{
		path: '/Education',
	  name: 'education',
	  component:Education
	},
   {
   	path: '/Staffmanagement',
	  name: 'staffmanagement',
	  component:Staffmanagement
   },
   {
   	path: '/Recruit',
	  name: 'recruit',
	  component:Recruit
   },
   {
   	path: '/Payrollindex',
	  name: 'payroll',
	  component:Payrollindex
   },
   {
   	path: '/Initialinformation',
	  name: 'initialinformation',
	  component:Initialinformation
   },
   {
   	path: '/Corporateculture',
	  name: 'corporateculture',
	  component:Corporateculture
   },
  {
  	path: '/Payrollsetup',
	  name: 'payrollsetup',
	  component:Payrollsetup
  },
  {
  	path: '/WagesTable',
	  name: 'wagestable',
	  component:WagesTable
  	
  },
  {
  	path: '/Attendancerate',
	  name: 'attendance',
	  component:Attendancerate
  },
  {
  	path: '/Farmmanagement',
	  name: 'employeegrowth',
	  component:Farmmanagement
  },
  {
  	path: '/Positionmanagement',
	  name: 'employeegrowth',
	  component:Positionmanagement
  },
  {
  	path: '/Department',
	  name: 'inservice',
	  component:Department 
  },
  {
  	path: '/PatrolLog',
	  name: 'inservice',
	  component:PatrolLog
  },
  {
  	path: '/WorkLog',
	  name: 'worklog',
	  component:WorkLog
  },
  {
  	path: '/WeekDishesManage',
	  name: 'weekdishes-Manage',
	  component: WeekDishesManage
  },
	{
		path: '/Jobdiary',
	  name: 'jobdiary',
	  component: Jobdiary
	},
	{
		path: '/Moving',
	  name: 'Moving',
	  component: Moving
	},
	{
		path: '/Notice',
	  name: 'Notice',
	  component: Notice
	},
	{
		path: '/Gorw',
	  name: 'gorw',
	  component: Gorw
	},
	{
		path: '/Monthlymenu',
	  name: 'monthlymenu',
	  component: Monthlymenu
	},
	{
		path: '/Monthlymenu',
	  name: 'monthlymenu',
	  component: Monthlymenu
	},
	{
		path: '/FllowMark',
	  name: 'fllowmark',
	  component: FllowMark
	},
	{
		path: '/Application',
	  name: 'Application',
	  component: Application
	},
	{
		path: '/Filedetails',
	  name: 'filedtails',
	  component: Filedetails
	},
	{
		path: '/Assetdetails',
	  name: 'assetdetails',
	  component: Assetdetails
	},
	{
		path:'/AttendanceMark',
	  name:'attendancemark',
	  component:AttendanceMark
	},
	
	{
		path:'/FllowRecord',
	  name:'fllowrecord',
	  component:FllowRecord
	},
	{
		path:'/RecruitMark',
	  name:'fllowrecord',
	  component:RecruitMark
		
	},
	{
		path:'/PayrollindexMark4',
	  name:'payrollindexmark4',
	  component:PayrollindexMark4
	},
	{
		path:'/Addstaff',
	  name:'addstaff',
	  component:Addstaff
	},
	{
		path:'/Resourcemanagement',
	  name:'resourcemanagement',
	  component:Resourcemanagement
	},
	{
		path:'/PayrollOne',
	  name:'payrollone',
	  component:PayrollOne
	},
	{
		path:'/PayrollThree',
	  name:'payrollthree',
	  component:PayrollThree
	},
	{
		path:'/YuComputer',
	  name:'yucomputer',
	  component:YuComputer
	},{
		path:'/Noauthority',
	  name:'Noauthority',
	  component:Noauthority
		
	},
	{
		path:'/MarkMoney',
	  name:'moneyMark',
	  component:MarkMoney
		
	},
	{
		path:'/AverageMark',
	  name:'averageMark',
	  component:AverageMark
		
	}
  ]
})
