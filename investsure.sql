-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2013 at 07:28 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `investsure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('roota', 'root'),
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `date`) VALUES
(1, 'Life Insurance in India', '<p>         \r\nMost of the times, life is smooth sailing and certain. But sometimes, it may\r\nbecome uncertain and a bumpy roller coaster ride. These uncertainties create\r\nlot of stress and may disturb family life. These uncertainties may be a sudden\r\nloss of life of an earning member, major medical illness in family, college\r\neducation and marriage of children. It is during these times that life insurance\r\nin its various forms and medical insurance, if properly planned and adequate\r\nproves to be extremely useful.</p><br />\r\n<h4>Types of Life Insurance...</h4>\r\nA life insurance policy could offer pure protection (insurance), another variant\r\ncould offer protection as well as investment while some others could offer only\r\ninvestment. The types of insurance policy are :<br />\r\n<ul type = "disc">\r\n<li>Term Life Insurance Policy</li>\r\n<li>Whole Life Insurance Policy</li>\r\n<li>Money Back Plan</li>\r\n<li>Pension Plan</li>\r\n<li>Endowment Policy</li>\r\n<li>Unit-linked insurance plan (ULIP)</li>\r\n</ul>\r\nThe most basic and the most important but often the most ignored of all\r\ninsurance policy is the <b><u>term plan</u></b> for protection of income. The minimum\r\ncoverage i.e the Sum Assured should be 10 times the annual net income i.e if\r\nthe annual net income is 5 Lacs the coverage should be 50 Lacs.</p><br />\r\n<h4>Insurance Companies in India...</h4>\r\n<p>\r\nLIC was the major insurance player before the year 2000. The insurance sector\r\nwas finally opened up to private players in 2001.The Insurance Regulatory and\r\nDevelopment Authority, an autonomous insurance regulator set up in 2000,\r\nhas extensive powers to oversee the insurance business and regulate in a\r\nmanner that will safeguard the interests of the insured. There are currently 23\r\nprivate companies in life insurance who have been provided with license by\r\nIRDA.\r\n			</p>\r\n			\r\n<br />', '2012-12-25'),
(2, 'Health Insurance in India', '<p>         \r\nHealth treatment nowadays is very costly. More than the disease it is the cost\r\nof treatment that takes its toll. To get rid of health worries health / medical\r\ninsurance is the answer. But over 70 per cent of these spends are out of pocket\r\nwhich leads to lot of hardships. According to a survey by NSSO (National\r\nSample Survey Organization), 40 per cent of the people hospitalized have\r\neither had to borrow money or sell assets to cover their medical expenses.</p>\r\n<p><b>It takes just one visit to a hospital to make us realize how vulnerable we are.</b>\r\nIt is a tough ordeal if you are diagnosed with an illness and need to be\r\nhospitalized, no matter if you are rich or poor, male or female, young or old.\r\nThe list of lifestyle diseases like heart problems, diabetes, stroke, renal failure,\r\nsome cancers just seems to get longer and more common these days.\r\nThankfully there are more specialty hospitals and specialist doctors - but all\r\nthat comes at a cost. The super rich can afford such costs, but what about an\r\naverage middle class person? For an illness that requires hospitalization /\r\nsurgery, costs can easily run into 5 figures.</p>\r\n<p>A Health Insurance Policy can cover such expenses to a large extent. Health\r\ninsurance policy not only covers expenses incurred during hospitalization but\r\nalso during the pre as well as post hospitalization stages like money spent for\r\nconducting medical tests and buying medicines. The cover will be to the extent\r\nof the sum insured.</p><br />\r\n<h4>Types of Health Insurance...</h4>\r\nThere are mainly 3 types of Health Insurance covers which are as follows.\r\n<ol><li><b>Individual Mediclaim</b><br />\r\nThe simplest form of health insurance is the Individual Mediclaim policy. It\r\ncovers the hospitalization expenses for an individual for upto the sum\r\nassured limit.</li>\r\n<li><b>Family Floater Policy</b><br />\r\nFamily Floater Policy is an enhanced version of the mediclaim policy. The\r\npolicy covers each family member and the entire family''s expenses are\r\ncovered up to the sum assured limit. So, in many ways the family floater\r\nplan offers flexibility in terms of utilizing the overall insurance coverage\r\namong the group.</li>\r\n<li><b>Unit Linked Health Plans</b><br />\r\nHealth Insurance Companies have introduced Unit Linked Health Plans which\r\ncombine health insurance with investment and pay back an amount at the end\r\nof the insurance term. The returns are dependent on market performance.</li>\r\n</ol><br />\r\n<h4>Current Scenario in India...</h4><br /><p>\r\nWith a reach of just about 2% of the country''s 1.2 billion population, India\r\noffers a huge potential in health insurance market. There are over 30 health\r\ninsurance products in the category offered by both life and non-life insurers.\r\nWhile ICICI Lombard, Bajaj Allianz and Reliance General are some of the\r\nprominent general insurers in the health insurance space, Apollo DKV, Star\r\nHealth & Allied Insurance are the standalone players.\r\n			</p><br />\r\n			\r\n', '2012-12-25'),
(3, 'Magic of Compounding', '<p>         \r\n\r\n			In our school days we have been taught about simple interest and compound\r\ninterest.<br /></p>\r\n<center><h4>A = P(1+R)<sup>N</sup></h4></center>\r\n<p>where,<br />\r\nA = Accumulated Amount<br />\r\nP = Principal Amount<br />\r\nR = Rate of Interest<br />\r\nN = Period of Investment<br /></p><br />\r\n<p>\r\nNot all of us use the power of compounding for our investment and do not\r\nstart early. For eg. if Mahesh starts saving an amount of Rs. 30,000/- every year\r\nfrom the age of 21 years and saves for 30 years, then at the age of 51 he would\r\nhave accumulated an amount of Rs. 54 Lacs. Ramesh starts saving an amount\r\nof Rs. 45,000/- at the age of 31 and saves for 20 years, then at the age of 51 he\r\nwould have accumulated an amount of 28 Lacs. Suresh starts saving an amount\r\nof Rs. 60,000/- at the age of 36 and saves for 15 years, then at the age of 51 he\r\nwould have accumulated an amount of 21 Lacs. Thus, though everyone had\r\ninvested Rs. 9 lacs the accumulated amount is substantially different. This is\r\nthe magic of compounding.\r\n\r\n			</p>\r\n			<br />\r\n', '2012-12-25'),
(4, 'Term Plan', '<p>         \r\nMost people do recognize the value of property like house, car, valuables and\r\nother assets and protect their value through general insurance. However, they\r\ndo not understand or want to understand that the same principal is applicable\r\nto life also. The value of life that is the income potential also has to be\r\npreserved so that the dependent family members are not adversely affected or\r\nput to harsh hardships in the eventuality of the unfortunate demise of the\r\nearning member. Logically all persons should take term plans first and protect\r\nincome potential before any other saving plans. Another reason why we\r\nseldom think about taking a pure Term Insurance policy is that they do not\r\nhave any survival benefits. To expect survival benefits is purely psychological\r\nand does not serve any practical purpose since the survival benefit is return of\r\npremium which considering the Present Value (PV) of future earning will hardly\r\nbe sufficient to last for one month.</p><br />\r\n<h4>How much Life Insurance should one have?</h4><br />\r\n<p>\r\nThe coverage should be at least 10 times your annual expenses to be able to\r\nmaintain the same life style. If the net annual income is 5 Lacs then the\r\ncoverage should be at least 50 Lacs.<br /><br />\r\n<b><u>Monthly Premium</u></b><br /><br />\r\nThe monthly premium for a <b>30 year Term Plan from ABC Company</b> is indicated\r\nin the table below.<br /><br /><br />\r\n<center>\r\n<table border=1 cellspacing = 2 cellpadding = 5>\r\n<tr>\r\n<th rowspan=2>Age</th>\r\n<th colspan = 2>Sum Assured = 50 Lacs</th>\r\n<th colspan = 2>Sum Assured = 1 Cr</th>\r\n</tr>\r\n<tr>\r\n<th>Non Smoker</th>\r\n<th>Smoker</th>\r\n<th>Non Smoker</th>\r\n<th>Smoker</th>\r\n</tr>\r\n<tr>\r\n<td>30</td>\r\n<td>Rs. 808/-</td>\r\n<td>Rs. 992/-</td>\r\n<td>Rs. 1480/-</td>\r\n<td>Rs. 1844/-</td>\r\n</tr>\r\n<tr>\r\n<td>40</td>\r\n<td>Rs. 1687/-</td>\r\n<td>Rs. 2130/-</td>\r\n<td>Rs. 3204/-</td>\r\n<td>Rs. 4072/-</td>\r\n</tr>\r\n</table>\r\n</center>\r\n			</p>\r\n			<br />\r\n', '2012-12-25'),
(5, 'ULIP', '<p>         \r\n\r\n\r\n			A ULIP is a market-linked insurance plan. It combines both insurance cover and\r\ninvestment. The difference between a ULIP and other insurance plans is the\r\nway in which the premium money is invested. Premium from, say, an\r\nendowment plan, is invested primarily in risk-free instruments like government\r\nsecurities (gsecs) and AAA rated corporate paper, while ULIP premiums can be\r\ninvested in stock markets in addition to corporate bonds and gsecs.</p><br />\r\n<h4>Mechanism of working of ULIP...</h4><br />\r\n<p>ULIP is combination of risk cover and investment. A small deduction is made on\r\nthe premium made by you on account of insurer charges. The major amount is\r\ninvested into the fund chosen by you and converted into units. The mortality\r\ncover and fund management charges and similar expenses are deducted by\r\ncancellation of units. The fund is dependent upon equity and debt market for\r\ngrowth.</p><br />\r\n<h4>Features of ULIP</h4>\r\n<ul>\r\n<li>Transparency</li>\r\n<li>Insurance cover plus savings</li>\r\n<li>Multiple investment options</li>\r\n<li>Flexibility</li>\r\n<li>Works like a SIP</li>\r\n</ul>\r\n<h4>Recent Regulatory Initiatives by IRDA...</h4><br />\r\n<p>\r\nIn 2010, IRDA has taken a holistic view of the features of ULIPs and addressed\r\nissues impacting the policyholders including the way such products are\r\nsold/bought and how ULIPs can be better financial instruments for providing\r\nrisk coverage and investment. This has made ULIP into a competitive product\r\nwhich is able to deliver value to the policy holders.\r\n			\r\n			</p>\r\n			<br /> \r\n', '2012-12-25');
