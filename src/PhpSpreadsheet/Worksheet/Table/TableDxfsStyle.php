<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet\Table;

use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Worksheet\Table;

class TableDxfsStyle
{
    /**
     * Header row dxfs index.
      * @var ?int
     */
    private $headerRow = null;

    /**
     * First row stripe dxfs index.
      * @var ?int
     */
    private $firstRowStripe = null;

    /**
     * second row stripe dxfs index.
      * @var ?int
     */
    private $secondRowStripe = null;

    /**
     * Header row Style.
      * @var ?Style
     */
    private $headerRowStyle = null;

    /**
     * First row stripe Style.
      * @var ?Style
     */
    private $firstRowStripeStyle = null;

    /**
     * Second row stripe Style.
      * @var ?Style
     */
    private $secondRowStripeStyle = null;

    /**
     * Name of the style.
      * @var string
     */
    private $name;

    /**
     * Create a new Table Style.
     *
     * @param string $name The name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set header row dxfs index.
     */
    public function setHeaderRow(int $row): self
    {
        $this->headerRow = $row;

        return $this;
    }

    /**
     * Get header row dxfs index.
     */
    public function getHeaderRow(): ?int
    {
        return $this->headerRow;
    }

    /**
     * Set first row stripe dxfs index.
     */
    public function setFirstRowStripe(int $row): self
    {
        $this->firstRowStripe = $row;

        return $this;
    }

    /**
     * Get first row stripe dxfs index.
     */
    public function getFirstRowStripe(): ?int
    {
        return $this->firstRowStripe;
    }

    /**
     * Set second row stripe dxfs index.
     */
    public function setSecondRowStripe(int $row): self
    {
        $this->secondRowStripe = $row;

        return $this;
    }

    /**
     * Get second row stripe dxfs index.
     */
    public function getSecondRowStripe(): ?int
    {
        return $this->secondRowStripe;
    }

    /**
     * Set Header row Style.
     */
    public function setHeaderRowStyle(Style $style): self
    {
        $this->headerRowStyle = $style;

        return $this;
    }

    /**
     * Get Header row Style.
     */
    public function getHeaderRowStyle(): ?Style
    {
        return $this->headerRowStyle;
    }

    /**
     * Set first row stripe Style.
     */
    public function setFirstRowStripeStyle(Style $style): self
    {
        $this->firstRowStripeStyle = $style;

        return $this;
    }

    /**
     * Get first row stripe Style.
     */
    public function getFirstRowStripeStyle(): ?Style
    {
        return $this->firstRowStripeStyle;
    }

    /**
     * Set second row stripe Style.
     */
    public function setSecondRowStripeStyle(Style $style): self
    {
        $this->secondRowStripeStyle = $style;

        return $this;
    }

    /**
     * Get second row stripe Style.
     */
    public function getSecondRowStripeStyle(): ?Style
    {
        return $this->secondRowStripeStyle;
    }
}
