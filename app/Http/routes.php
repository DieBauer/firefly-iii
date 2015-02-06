<?php

/*
 * Home Controller
 */
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
Route::get('/prev', ['uses' => 'HomeController@sessionPrev', 'as' => 'sessionPrev']);
Route::get('/next', ['uses' => 'HomeController@sessionNext', 'as' => 'sessionNext']);
Route::get('/jump/{range}', ['uses' => 'HomeController@rangeJump', 'as' => 'rangeJump']);

/*
 * Account Controller
 */
Route::get('/accounts/{what}', ['uses' => 'AccountController@index', 'as' => 'accounts.index'])->where('what', 'revenue|asset|expense');
Route::get('/accounts/create/{what}', ['uses' => 'AccountController@create', 'as' => 'accounts.create'])->where('what', 'revenue|asset|expense');
//Route::get('/accounts/edit/{account}', ['uses' => 'AccountController@edit', 'as' => 'accounts.edit']);
//Route::get('/accounts/delete/{account}', ['uses' => 'AccountController@delete', 'as' => 'accounts.delete']);
//Route::get('/accounts/show/{account}/{view?}', ['uses' => 'AccountController@show', 'as' => 'accounts.show']);

/*
 * Bills Controller
 */
// bills controller
Route::get('/bills', ['uses' => 'BillController@index', 'as' => 'bills.index']);
//Route::get('/bills/rescan/{bill}', ['uses' => 'BillController@rescan', 'as' => 'bills.rescan']); # rescan for matching.
Route::get('/bills/create', ['uses' => 'BillController@create', 'as' => 'bills.create']);
//Route::get('/bills/edit/{bill}', ['uses' => 'BillController@edit', 'as' => 'bills.edit']);
//Route::get('/bills/delete/{bill}', ['uses' => 'BillController@delete', 'as' => 'bills.delete']);
//Route::get('/bills/show/{bill}', ['uses' => 'BillController@show', 'as' => 'bills.show']);

/*
 * Budget Controller
 */
Route::get('/budgets', ['uses' => 'BudgetController@index', 'as' => 'budgets.index']);
//Route::get('/budgets/income', ['uses' => 'BudgetController@updateIncome', 'as' => 'budgets.income']); # extra.
//Route::get('/budgets/create', ['uses' => 'BudgetController@create', 'as' => 'budgets.create']);
//Route::get('/budgets/edit/{budget}', ['uses' => 'BudgetController@edit', 'as' => 'budgets.edit']);
//Route::get('/budgets/delete/{budget}', ['uses' => 'BudgetController@delete', 'as' => 'budgets.delete']);
//Route::get('/budgets/show/{budget}/{limitrepetition?}', ['uses' => 'BudgetController@show', 'as' => 'budgets.show']);
//Route::get('/budgets/list/noBudget', ['uses' => 'BudgetController@noBudget', 'as' => 'budgets.noBudget']);

/*
 * Category Controller
 */
Route::get('/categories', ['uses' => 'CategoryController@index', 'as' => 'categories.index']);
//Route::get('/categories/create', ['uses' => 'CategoryController@create', 'as' => 'categories.create']);
//Route::get('/categories/edit/{category}', ['uses' => 'CategoryController@edit', 'as' => 'categories.edit']);
//Route::get('/categories/delete/{category}', ['uses' => 'CategoryController@delete', 'as' => 'categories.delete']);
//Route::get('/categories/show/{category}', ['uses' => 'CategoryController@show', 'as' => 'categories.show']);
//Route::get('/categories/list/noCategory', ['uses' => 'CategoryController@noCategory', 'as' => 'categories.noCategory']);

/*
 * Currency Controller
 */
Route::get('/currency', ['uses' => 'CurrencyController@index', 'as' => 'currency.index']);
//Route::get('/currency/create', ['uses' => 'CurrencyController@create', 'as' => 'currency.create']);
//Route::get('/currency/edit/{currency}', ['uses' => 'CurrencyController@edit', 'as' => 'currency.edit']);
//Route::get('/currency/delete/{currency}', ['uses' => 'CurrencyController@delete', 'as' => 'currency.delete']);
//Route::get('/currency/default/{currency}', ['uses' => 'CurrencyController@defaultCurrency', 'as' => 'currency.default']);

/*
 * Piggy Bank Controller
 */
// piggy bank controller
Route::get('/piggy_banks', ['uses' => 'PiggyBankController@index', 'as' => 'piggy_banks.index']);
//Route::get('/piggy_banks/add/{piggyBank}', ['uses' => 'PiggyBankController@add']); # add money
//Route::get('/piggy_banks/remove/{piggyBank}', ['uses' => 'PiggyBankController@remove']); #remove money
//Route::get('/piggy_banks/create', ['uses' => 'PiggyBankController@create', 'as' => 'piggy_banks.create']);
//Route::get('/piggy_banks/edit/{piggyBank}', ['uses' => 'PiggyBankController@edit', 'as' => 'piggy_banks.edit']);
//Route::get('/piggy_banks/delete/{piggyBank}', ['uses' => 'PiggyBankController@delete', 'as' => 'piggy_banks.delete']);
//Route::get('/piggy_banks/show/{piggyBank}', ['uses' => 'PiggyBankController@show', 'as' => 'piggy_banks.show']);

/*
 * Preferences Controller
 */
Route::get('/preferences', ['uses' => 'PreferencesController@index', 'as' => 'preferences']);

/*
 * Profile Controller
 */
Route::get('/profile', ['uses' => 'ProfileController@index', 'as' => 'profile']);
//Route::get('/profile/change-password', ['uses' => 'ProfileController@changePassword', 'as' => 'change-password']);

/*
 * Repeated Expenses Controller
 */
// repeated expenses controller:
Route::get('/repeatedexpenses', ['uses' => 'RepeatedExpenseController@index', 'as' => 'repeated.index']);
//Route::get('/repeatedexpenses/create', ['uses' => 'RepeatedExpenseController@create', 'as' => 'repeated.create']);
//Route::get('/repeatedexpenses/edit/{repeatedExpense}', ['uses' => 'RepeatedExpenseController@edit', 'as' => 'repeated.edit']);
//Route::get('/repeatedexpenses/delete/{repeatedExpense}', ['uses' => 'RepeatedExpenseController@delete', 'as' => 'repeated.delete']);
//Route::get('/repeatedexpenses/show/{repeatedExpense}', ['uses' => 'RepeatedExpenseController@show', 'as' => 'repeated.show']);

/*
 * Report Controller
 */
Route::get('/reports', ['uses' => 'ReportController@index', 'as' => 'reports.index']);
//Route::get('/reports/{year}', ['uses' => 'ReportController@year', 'as' => 'reports.year']);
//Route::get('/reports/{year}/{month}', ['uses' => 'ReportController@month', 'as' => 'reports.month']);
//Route::get('/reports/budget/{year}/{month}', ['uses' => 'ReportController@budget', 'as' => 'reports.budget']);

/*
 * Search Controller
 */
Route::get('/search', ['uses' => 'SearchController@index', 'as' => 'search']);

/*
 * Transaction Controller
 */
// transaction controller:
Route::get('/transactions/{what}', ['uses' => 'TransactionController@index', 'as' => 'transactions.index'])->where(
    ['what' => 'expenses|revenue|withdrawal|deposit|transfer|transfers']
);
Route::get('/transactions/create/{what}', ['uses' => 'TransactionController@create', 'as' => 'transactions.create'])->where(
    ['what' => 'expenses|revenue|withdrawal|deposit|transfer|transfers']
);
//Route::get('/transaction/edit/{tj}', ['uses' => 'TransactionController@edit', 'as' => 'transactions.edit']);
//Route::get('/transaction/delete/{tj}', ['uses' => 'TransactionController@delete', 'as' => 'transactions.delete']);
//Route::get('/transaction/show/{tj}', ['uses' => 'TransactionController@show', 'as' => 'transactions.show']);
//Route::get('/transaction/relate/{tj}', ['uses' => 'TransactionController@relate', 'as' => 'transactions.relate']);
//Route::post('/transactions/relatedSearch/{tj}', ['uses' => 'TransactionController@relatedSearch', 'as' => 'transactions.relatedSearch']);
//Route::post('/transactions/alreadyRelated/{tj}', ['uses' => 'TransactionController@alreadyRelated', 'as' => 'transactions.alreadyRelated']);
//Route::post('/transactions/doRelate', ['uses' => 'TransactionController@doRelate', 'as' => 'transactions.doRelate']);
//Route::any('/transactions/unrelate/{tj}', ['uses' => 'TransactionController@unrelate', 'as' => 'transactions.unrelate']);

/*
 * User Controller
 * TODO move to AuthController
 */
Route::get('/logout', ['uses' => 'UserController@logout', 'as' => 'logout']);

Route::controllers(
    [
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]
);