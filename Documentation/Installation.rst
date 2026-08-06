.. include:: Includes.txt


.. _installation:


Installation
============

You can install EXT:min like any other TYPO3 extension.

**With composer:**

::

    $ composer req t3/min

**Without composer:**

You'll find **min** in TER for TYPO3. You can download it from web or right in the Extension Manager in TYPO3 backend.


Requirements
------------

- PHP 8.4 or higher
- TYPO3 CMS 14.3 LTS


Setup
-----

**It is required to manually include the EXT:min site set.**

Add the site set ``t3/min`` to your site configuration dependencies:

.. code-block:: yaml

    dependencies:
      - t3/min


Alternatively, you can import the TypoScript configuration manually:

.. code-block:: typoscript

    @import 'EXT:min/Configuration/TypoScript/setup.typoscript'


Upgrade notice
--------------

From 2.0 to 3.0
~~~~~~~~~~~~~~~

The tinysource option ``oneLineMode`` has been removed. This behaviour is enabled by default, now.


From 1.0 to 2.0
~~~~~~~~~~~~~~~

When you upgrade EXT:min from version 1.0 to 2.0, **you need to update your TypoScript configuration!**

- The ``protectCode`` moved from ``head`` and ``body`` section, to root level.
  Any old occurrences are being ignored (which may break, protected code)
- The following options has been removed, those functionalities are enabled by default, when tinysource is enabled:
    - ``stripTabs``
    - ``stripNewLines``
    - ``stripDoubleSpaces``
    - ``stripTwoLinesToOne``
- The function ``stripSpacesBetweenTags`` has been removed entirely
