<?php

namespace FPlus\Millennium\Model;

class BillingStatus
{
    const __default = 'NotBilled0';
    const NotBilled0 = 'NotBilled0';
    const NotBilled = 'NotBilled';
    const Paid = 'Paid';
    const Suspended = 'Suspended';
    const Frozen = 'Frozen';
    const Pending = 'Pending';
    const Error = 'Error';
    const Waived = 'Waived';
    const Refunded = 'Refunded';
}
