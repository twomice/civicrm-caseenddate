# CiviCRM: Case End Date

![Screenshot](/images/screenshot.png)

Allows easy display and editing of case end date in "manage case" form.

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Requirements

* CiviCRM 4/7 / 5.0

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl caseenddate@https://github.com/twomice/caseenddate/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/twomice/caseenddate.git
cv en caseenddate
```

## Usage

* Install the extension and observe "End Date" is visible in the "Manage Case" 
screen (per screenshot above).
* Note that editing the end date in CiviCRM really means "creating an activity 
of type 'Change case status', setting a "closed" status such as "Resolved", and
specifying the date of that activity. This means a case can only have an end
date if it's in a status of "closed" type.

